<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chart MySQL</title>
	<style>
		body{
			background-color: #24292e;
		}
	</style>
</head>
<body>
	<canvas id="myChart" style="position: relative; height: 40vh; width: 80vw;"></canvas>
	
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
	var ctx = document.getElementById('myChart')
	var myChart = new Chart(ctx, {
		type: 'bar',
		data:{
			datasets: [{
				label: 'Rancking de Libros',
				backgroundColor: ['#6bf1ab', '#63d69f','#438c6c','#509c7f','#1f794e'],
				borderColor: ['black'],
				borderWidth:1
			}]
		},
		options:{
			scales:{
				y:{
					beginAtZero:true
				}
			} 
		}
	})

	let url = 'http://localhost/Mundo_Libro/api/articulos.php'
	fetch(url)
		.then( response => response.json() )
		.then( datos => mostrar(datos) )
		.catch( error => console.log(error) )


	const mostrar = (articulos) =>{
		articulos.forEach(element => {
			myChart.data['labels'].push(element.title)
			myChart.data['datasets'][0].data.push(element.ranking)
		});
		console.log(myChart.data)
	}
</script>
</body>
</html>