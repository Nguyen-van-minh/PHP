<?php require_once('./view/admin/header.php') ?>
<head>
<title>Insert title here</title>
</head>
    <div class="col-sm-9">
        <div style="display: flex;justify-content: space-between; "class="">
			<div class="col-6 " style="height: 400px;width: 400px;">
				<h1>Biểu đồ thể hiện đơn đặt hàng</h1>
				<canvas id="linechart"></canvas>
			</div>
			<div class="col-6"  style="height: 400px;width: 400px; ">
			<h1>Biểu đồ thể hiện tổng quan về doanh thu</h1>
				<canvas style="height: 300px;width: 300px;" id="linechart1"></canvas>
			</div>
    </div>
	
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.0/chart.min.js"></script>
<script>
	var bienx=['thành công','đã hủy','đang chờ duyệt'];
	var bieny=[<?= $data[0]['duyet'];?>,<?= $data[0]['huy'];?>,<?= $data[0]['choduyet'];?>];
	var CHART = document.getElementById('linechart').getContext('2d');
	var line_chart = new Chart(CHART,{
		type :'pie',
		data:{
		
			labels : bienx,
			datasets:[{
				label:'name_data',
				data: bieny,
                backgroundColor: ["red", "green", "blue"], 
			}]
		}
	});
</script>
<script>
	var bienx1=['Doanh Thu dự tính','Doanh thu đạt được','Doanh thu tương lai','Doanh thu chưa đạt được do đơn hàng bị hủy'];
	var bieny=[<?= $data1[0]['tong'];?>,<?= $data1[0]['duyet'];?>,<?= $data1[0]['choduyet'];?>,<?= $data1[0]['huy'];?>];
	var CHART = document.getElementById('linechart1').getContext('2d');
	var line_chart = new Chart(CHART,{
		type :'bar',
		data:{
		
			labels : bienx1,
			datasets:[{
				label:'Biểu đồ cột',
				data: bieny,
                backgroundColor: ["red", "green", "blue","black"], 
			}]
		}
	});
</script>
