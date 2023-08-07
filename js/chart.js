var xValues = ["Laki-Laki", "Perempuan"];
var yValues = [1351, 1289];
var barColors = ["#34996c", "#344799"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [
      {
        backgroundColor: barColors,
        data: yValues,
      },
    ],
  },
  options: {
    legend: { display: false },
    title: {
      display: true,
      text: "TINGKAT PERKEMBANGAN DESA DAN KELURAHAN",
    },
  },
});
