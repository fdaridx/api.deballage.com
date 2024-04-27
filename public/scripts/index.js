function ucword(str) {
    return str.replace(/\b\w/g, (c) => c.toUpperCase());
}

function uppercase(str) {
    return str.toUpperCase();
}

function isNumeric(){
    $.each($("[numeric]"), function(index, input) {
        $(input).on('input', function () {
            $(this).val($(this).val().replace(/[^0-9.]/g, ''));
        })
    });
}


function verify() {
    let x = 0;

    $("[verify]").each(function (i, elt) {
        if ($(elt).val() === '' || $(elt).val() === null) {
            x += 1;
            
            error($(elt));

            $('#enregistrer').css({
                'backgroundColor': 'gainsboro',
                'color': 'gainsboro',
            });
        }
        else {
            success($(elt));

            $('#enregistrer').css({
                'color': '#fff',
                'backgroundColor': '#0061f2',
                'borderColor': '#0061f2'
            });
        }
        $(elt).is('select') ? $(elt).on('change', verify) : $(elt).on('input', verify);
    });

    return x;
}

function error(elt) {
    if (elt.parent().find('[message]').length == 0) {
        elt.parent().append($('<span>',{
            'text': 'This field is required',
            'style': 'font-size:13px; color:red',
        }).attr('message',''));
    }
}

function success(elt) {
    elt.parent().find('[message]').remove();
}

async function redirect(url, param = {}, authenticable = true) {
    const headers = {
        Authorization: `Bearer ${localStorage.getItem('auth_token')}`,
    }

    if (authenticable) {
        $('body').html('').append((await axios.get(url, {
            headers: headers, params: param
        })).data);
    } else {
        $('body').html('').append((await axios.get(url, param)).data);
    }

    history.pushState({}, '', url);
}

$(function () {
    isNumeric();
});

$(document).on('alpine:init', function () {

    Alpine.data('xcategorie', () => ({
        categories: null,
        async init () {
            this.categories = (await axios.get('api/categories')).data;
        },
    }));

    Alpine.data('xproductList', () => ({
        products: null,
        productRandoms: null,
        async init () {
            let products = (await axios.get('api/products')).data;
            this.products = products;
            
            for (let i = products.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [products[i], products[j]] = [products[j], products[i]];
            }
            this.productRandoms = products;
        },
    }));

    Alpine.data('xproduct', (id) => ({
        product: null,
        quantite: 1,
        total: 0,
        async init () {
            this.product = (await axios.get('/api/products/show/'+id)).data;
            this.total = this.quantite * this.product.price;
        },
        moin () { 
            this.quantite > 1 ? this.quantite -- : this.quantite = 1;
            this.total = this.quantite * this.product.price;
        },
        plus () { 
            this.quantite++; 
            this.total = this.quantite * this.product.price;
        },
    }));

    Alpine.data('xlien', () => ({
        async redirect (url, param = {}) { 
            console.log('clicked');
            redirect(url, param); 
        },
        async delete () { 
            // console.log('delete');
            // console.log('api/' + api + '/delete/' + id);
            // axios.delete('api/' + api + '/delete/' + id)
            // .then(async response => {
            //     this.datas = this.paginate((await axios.get('api/' + api)).data, this.item, this.itemActive);
            // })
            // .catch(response => {console.log(response);})
        }
    }));

    Alpine.data('xdatas', (api, item = 0) => ({
        item: item,
        itemActive: 1,
        datas: [],
        lengthData: 0,
        nbElt: 0,
        
        async init () {
            this.nbElt = this.itemActive * this.item;
            this.datas = this.paginate((await axios.get('/api/' + api)).data, this.item);
        },
        async paginate (datas, item, number = 0) {
            this.lengthData = datas.length;
            if (parseInt(item) < datas.length) {
                let content = [];
                for (let i = 0; i < datas.length; i+= parseInt(item)) {
                    content.push(datas.slice(i, i + parseInt(item)));
                }
                return content[number];
            }
            else {
                return datas;
            }
        },
        async change (number) {
            if (number * this.item > this.lengthData) {
                this.nbElt = this.lengthData;
            } else {
                this.nbElt = this.item * number;
            }
            this.datas = this.paginate((await axios.get('api/' + api)).data, this.item, number -= 1);
        }
    }));

});



