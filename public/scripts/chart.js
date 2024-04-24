document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("myChart").getContext("2d");

    var gradient = ctx.createLinearGradient(139, 0, 0, 1);
    gradient.addColorStop(0, "rgba(255,0,0,0.8)");
    gradient.addColorStop(1, "rgba(0,0,0,0.1)");

    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [
                {
                    label: "My Dataset",
                    data: [10, 25, 30, 15, 20, 35],
                    backgroundColor: gradient,
                    borderColor: "red",
                    borderWidth: 4,
                    pointRadius: 0,
                    lineTension: 0.3,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
            plugins: {
                legend: {
                    display: false,
                },
            },
            elements: {
                point: {
                    radius: 0,
                },
            },
            animation: {
                duration: 2000,
                easing: "linear",
                onComplete: function () {
                    var data = chart.data.datasets[0].data;
                    var newData = data.map(function (value) {
                        return value + Math.random() * 10 - 5;
                    });
                    chart.data.datasets[0].data = newData;
                    chart.update();
                },
            },
        },
    });

    var indicator = document.createElement("div");
    indicator.classList.add("indicator");
    document.body.appendChild(indicator);

    chart.canvas.addEventListener("mousemove", function (e) {
        var position = chart.canvas.getBoundingClientRect();
        var value = chart.scales.y.getValueForPixel(e.clientY - position.top);
        indicator.textContent = "Value: " + value.toFixed(2);
        indicator.style.top = e.clientY + "px";
        indicator.style.left = e.clientX + "px";
    });

    chart.canvas.addEventListener("mouseleave", function () {
        indicator.textContent = "";
    });
});

function closeModal() {
    const modal = document.getElementById('modal');
    modal.classList.add('hidden');
}

const cancelButton = document.getElementById('cancelButton');
cancelButton.addEventListener('click', closeModal);

const modalContainer = document.getElementById('modal');
modalContainer.addEventListener('click', function (event) {
    if (event.target === this) {
        closeModal();
    }
});
