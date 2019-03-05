$(function(){
	window.onload = function() {
		var ctx = document.getElementById("graphic").getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'line',
		    data: {
		        labels:days_list,
		        datasets: [{
		            label: 'Gastos',
		            data: finances,
		            backgroundColor: [
		                'rgba(255, 0, 0)'
		            ],
		            borderColor: [
		                'rgba(255,0, 0)'
		            ],
		            borderWidth: 1
		        }, {
		        	label:'Vendas',
		        	data:sales,
		        	backgroundColor: [
		                'rgba(0, 0, 255)'
		            ],
		            borderColor: [
		                'rgba(0, 0, 255)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        }
		    }
		});
	}
});
$(function(){
	CKEDITOR.replace("description");
});
$(function(){
	CKEDITOR.replace("featurettedescription");
});
$(function(){
	CKEDITOR.replace("bodyabout");
});
