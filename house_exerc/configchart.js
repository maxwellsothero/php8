<script> 
const data = {
  labels: [
    'Maxwell',
    'Alessandro',
    'Jacques',
    'Wagner',
    'Robson',
    'Laerte',
    'Cecilia'
  ],
  datasets: [{
    label: 'Consumo de Bebidas',
    data: [7, 30, 15, 25, 10,25,5],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'green',      
      'rgb(255, 205, 86)',      
      'rgb(54, 162, 235)',
      'blue',
      'red',
      'purple'

    ],
    hoverOffset: 30
  }]
};
  
const config = {
  type: 'pie',
  data: data,
  radius:30,
};
  </script>