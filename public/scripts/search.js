const searchInput = document.getElementById('search-input');
const suggestionList = document.getElementById('suggestion-list');
let isSuggestionVisible = false;

searchInput.addEventListener('input', function () {
  const searchText = this.value.toLowerCase();
  const suggestions = getSuggestions(searchText);

  renderSuggestions(suggestions);
});

document.addEventListener('click', function (event) {
  const isClickInside = searchInput.contains(event.target) || suggestionList.contains(event.target);
  if (!isClickInside && isSuggestionVisible) {
    suggestionList.style.display = 'none';
    isSuggestionVisible = false;
  }
});

function getSuggestions(searchText) {

  const suggestions = [
    {
      category: 'Products',
      items: [
        { name: 'Product 1', price: '$10.99' },
        { name: 'Product 2', price: '$19.99' },
        { name: 'Product 3', price: '$8.99' },
      ],
    },
    {
      category: 'Brands',
      items: [
        { name: 'Brand 1', price: 'N/A' },
        { name: 'Brand 2', price: 'N/A' },
        { name: 'Brand 3', price: 'N/A' },
      ],
    },
    {
      category: 'Categories',
      items: [
        { name: 'Category 1', price: 'N/A', image: 'image1.jpg' },
        { name: 'Category 2', price: 'N/A', image: 'image2.jpg' },
        { name: 'Category 3', price: 'N/A', image: 'image3.jpg' },
      ],
    },
  ];

  return suggestions.map(category => ({
    category: category.category,
    items: category.items.filter(item =>
      item.name.toLowerCase().includes(searchText)
    ),
  }));
}

function renderSuggestions(suggestions) {
  suggestionList.innerHTML = '';

  if (suggestions.length === 0) {
    suggestionList.style.display = 'none';
    isSuggestionVisible = false;
    return;
  }

  suggestions.forEach(category => {
    const categoryHeader = document.createElement('li');
    categoryHeader.textContent = category.category;
    categoryHeader.classList.add('category-header');
    suggestionList.appendChild(categoryHeader);

    category.items.forEach(item => {
      const listItem = document.createElement('li');
      listItem.classList.add('suggestion-item');

      if (category.category === 'Categories') {
        const img = document.createElement('img');
        img.src = item.image;
        img.alt = item.name;
        listItem.appendChild(img);
      }

      const name = document.createElement('span');
      name.textContent = item.name;
      listItem.appendChild(name);

      const price = document.createElement('span');
      price.textContent = item.price;
      listItem.appendChild(price);

      suggestionList.appendChild(listItem);
    });
  });

  suggestionList.style.display = 'block';
  isSuggestionVisible = true;
}