<div class="row row-cards">
	<div class="col-sm-6 col-lg-3">
		<div class="card p-3">
	    <div class="d-flex align-items-center">
        <span class="stamp stamp-md bg-blue mr-3">
          <i class="fa fa-calendar"></i>
        </span>
        <div>
          <h4 class="m-0"><a href="javascript:void(0)"><?= date('l') ?> <small><?= date('d/m/Y') ?></small></a></h4>
          <small class="text-muted">Tanggal</small>
        </div>
      </div>
	  </div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="card p-3">
	    <div class="d-flex align-items-center">
        <span class="stamp stamp-md bg-green mr-3">
          <i class="fa fa-calendar"></i>
        </span>
        <div>
          <h4 class="m-0"><a href="javascript:void(0)">105 <small>Transaksi</small></a></h4>
          <small class="text-muted">Jumlah Penjualan</small>
        </div>
      </div>
	  </div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="card p-3">
	    <div class="d-flex align-items-center">
        <span class="stamp stamp-md bg-red mr-3">
          <i class="fa fa-calendar"></i>
        </span>
        <div>
          <h4 class="m-0"><a href="javascript:void(0)">Rp<small>1.200.000</small></a></h4>
          <small class="text-muted">Total Omset</small>
        </div>
      </div>
	  </div>
	</div>
	<div class="col-sm-6 col-lg-3">
		<div class="card p-3">
	    <div class="d-flex align-items-center">
        <span class="stamp stamp-md bg-yellow mr-3">
          <i class="fa fa-calendar"></i>
        </span>
        <div>
          <h4 class="m-0"><a href="javascript:void(0)">Ayam <small>Geprek</small></a></h4>
          <small class="text-muted">Menu Terlaris</small>
        </div>
      </div>
	  </div>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">5 Menu terlaris</h3>
      </div>
      <div class="card-body">
        <div id="chart-pie" style="height: 12rem;"></div>
      </div>
    </div>
    <script>
      require(['c3', 'jquery'], function(c3, $) {
      	$(document).ready(function(){
      		var chart = c3.generate({
      			bindto: '#chart-pie', // id of chart wrapper
      			data: {
      				columns: [
      				    // each columns data
      					['data1', 53],
      					['data2', 44],
      					['data3', 12],
      					['data4', 14],
      					['data5', 10]
      				],
      				type: 'pie', // default type of chart
      				colors: {
      					'data1': tabler.colors["blue-darker"],
      					'data2': tabler.colors["blue"],
      					'data3': tabler.colors["blue-light"],
      					'data4': tabler.colors["blue-lighter"],
      					'data5': tabler.colors["blue"]
      				},
      				names: {
      				    // name of each serie
      					'data1': 'Ayam Geprek',
      					'data2': 'Ayam Goreng',
      					'data3': 'Ayam Bakar',
      					'data4': 'Bebek Goreng',
      					'data5': 'Sate'
      				}
      			},
      			axis: {
      			},
      			legend: {
                      show: false, //hide legend
      			},
      			padding: {
      				bottom: 0,
      				top: 0
      			},
      		});
      	});
      });
    </script>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Detail Menu</h4>
      </div>
      <table class="table card-table">
        <tbody><tr>
          <td width="1"><span class="badge badge-success">1</span></td>
          <td>Ayam Geprek</td>
          <td class="text-right"><span class="text-muted">53</span></td>
        </tr>
        <tr>
          <td><span class="badge badge-success">2</span></td>
          <td>Ayam Goreng</td>
          <td class="text-right"><span class="text-muted">44</span></td>
        </tr>
        <tr>
          <td><span class="badge badge-success">3</span></td>
          <td>Ayam Bakar</td>
          <td class="text-right"><span class="text-muted">12</span></td>
        </tr>
        <tr>
          <td><span class="badge badge-success">4</span></td>
          <td>Bebek Goreng</td>
          <td class="text-right"><span class="text-muted">14</span></td>
        </tr>
        <tr>
          <td><span class="badge badge-success">5</span></td>
          <td>Sate</td>
          <td class="text-right"><span class="text-muted">10</span></td>
        </tr>
      </tbody></table>
    </div>
  </div>
</div>

<div class="row">
	
	<div class="col-4">
    <div class="card card-aside">
      <a href="#" class="card-aside-column" style="background-image: url(<?= base_url() ?>assets/images/photos/david-klaasen-54203-500.jpg)"></a>
      <div class="card-body d-flex flex-column">
        <h4><a href="#">Cabang Ampera</a></h4>
        <div class="text-muted">Jalan Ampera Raya No 20</div>
        <div class="d-flex align-items-center pt-4 mt-auto">
          
         
          <div class="ml-auto text-muted">
            <a href="./profile.html" class="text-default">Top Outlet</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-8">
  	<div class="row">
			<div class="col-4">
		    <div class="card">
		      <div class="card-body p-6 text-center">
		        <div class="h1 m-0">30</div>
		        <div class="text-muted mb-4">Jumlah Order</div>
		      </div>
		    </div>
		  </div>
		  <div class="col-4">
		    <div class="card">
		      <div class="card-body p-6 text-center">
		        <div>
		          <h4 class="h3 m-1 "><a href="javascript:void(0)">Rp<small>1.200.000</small></a></h4>
		          <div class="text-muted mb-4">Total Omset</div>
		        </div>
		      </div>
		    </div>
		  </div>
		  <div class="col-4">
		    <div class="card">
		      <div class="card-body p-6 text-center">
		        <div>
		          <h4 class="h3 m-1 "><a href="javascript:void(0)">Ayam Geprek</a></h4>
		          <div class="text-muted mb-4">Menu Terlaris</div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	  


	<div class="col-12">
    <div class="card">
    	<div class="card-header">
        <h4 class="card-title">Detail Outlet</h4>
      </div>
      <div class="table-responsive">
        <table class="table table-hover table-outline table-vcenter text-nowrap card-table">
          <thead>
            <tr>
              <th class="text-center w-1"><i class="icon-people"></i></th>
              <th>Nama</th>
              <th>Jumlah Order</th>
              <th>Omset</th>
              <th class="text-center">Menu Terlaris</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">
                <span class="text-muted">1</span>
              </td>
              <td>
                <div>Cabang Ampera</div>
                <div class="small text-muted">
                  Jalan Ampera Raya No 20
                </div>
              </td>
              <td>
                25 Order
              </td>
              <td>
                Rp850.000
              </td>
              <td class="text-center">
              	Ayam Bakar
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <span class="text-muted">2</span>
              </td>
              <td>
                <div>Cabang Kemang</div>
                <div class="small text-muted">
                  Jalan Kemang No 1
                </div>
              </td>
              <td>
                12 Order
              </td>
              <td>
                Rp465.000
              </td>
              <td class="text-center">
              	Ayam Goreng
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <span class="text-muted">3</span>
              </td>
              <td>
                <div>Cabang Blok M</div>
                <div class="small text-muted">
                  Jalan Blok M nomor 7
                </div>
              </td>
              <td>
                30 Order
              </td>
              <td>
                Rp950.000
              </td>
              <td class="text-center">
              	Bebek Goreng
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>