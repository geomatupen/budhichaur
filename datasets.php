<?php include('includes/header.php'); ?>

<style type="text/css">
body{
	background-color: white;
}
	.body{
		padding-top: 100px;
        padding-right: 0;
	}

    
	.title{
		border-bottom: 4px solid #369;
        margin-bottom: 10px;
        padding-left: 0;
}
	.box{
			background-color: lightgrey;
			border-radius: 4px;
			color: black;
            padding-bottom: 15px;
		}

		.list-group{
			font-size: 11px;
            font-weight: bold;
		}

		table{
			font-size: 13px;
		}

        .navbar-search{
            padding-bottom: 10px;
        }

        .page {
            width: 100%;
            font-size: 11px;
        }

        .pagebtn{
            padding-left: 160px;
        }

        .search-box{
                padding-top: 50px;
            }
        .textarea{
            padding-top: 40px;
            padding-left: 0;
        }
        .no{
            font-size:45px;
            font-weight: 500;
            color: #262626;
}
        .data{
            font-size: 16px;
            font-weight: bold;
            color: #262626;
        }

    .image-db{
        padding-top: 20px;
    }

    .sector{
        color: white;
        font-weight: 600;
    }

    .table-body-1{
        font-size:14px ;
        color:#C12E2A ;
    }

.table-body-1:hover{
    color: #262626;
}
    .table-body-2{
        font-size: 13px;
    }

    .date{
    text-align: center;
    }

    .img{
    	padding-right: 0;
    }
	
	.image-db > img{
		width:80px;
		height:80px; 
	}
</style>
	
	
	<div class="container">
        <div class="row">
			<div class="col-md-offset-1 col-md-10 body">
                    <div class="col-md-12 title">
			<h2>Datasets</h2>
		</div>

		<div class="col-md-12 box">
            <div class="col-md-6">
                <div class="col-md-3 img">
                <div class="image-db">
                <img src="images/database.png">
                </div>
                </div>
                <div class="col-md-9 textarea">
                    <span class="no">311</span><span class="data">Datasets</span>
                </div>
            </div>


            <div class="col-md-6 search-box">
                <form class=" navbar-search" role="search" >
                    <div class="input-group">

                        <input type="text" class="form-control" placeholder="Search for" width="60px;">

                        <div class="input-group-btn">
                            <button type="button" class="btn btn-search btn-danger">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </div>
                    </div>
                </form>
		</div>
        </div>


    <div class="col-md-3 col-xs-12 col-sm-3 col-lg-3" style="padding-top:15px; padding-left:0; height:550px;">
      <div class="list-group">
  <a class="list-group-item" style="background-color: #369">
   <span class="sector-heading sector">Sector</span>
  </a>
    <label class="list-group-item list-group-item-action"><a href="#">Select all</a><br><input type="checkbox" name="check"> Construction Projects</label>
  <label  class="list-group-item list-group-item-action"><input type="checkbox" name="check"> Drinking Water Projects</label>
  <label  class="list-group-item list-group-item-action"><input type="checkbox" name="check"> Dumping Sites Projects</label>
  <label  class="list-group-item list-group-item-action "><input type="checkbox" name="check"> Road Projects</label>
    <label  class="list-group-item list-group-item-action "><input type="checkbox" name="check"> Electricity Projects</label>
      <label  class="list-group-item list-group-item-action "><input type="checkbox" name="check"> School Projects</label>
        <label  class="list-group-item list-group-item-action "><input type="checkbox" name="check"> Internet Projects</label>
          <label  class="list-group-item list-group-item-action "><input type="checkbox" name="check"> Solar Projects</label>
</div>
<button class="btn btn-danger">Apply</button>
</div>

<div class="col-md-9 col-xs-12 col-sm-9 col-lg-9" style=" padding-top:15px; padding-right: 0">
<table class="table table-striped table-responsive">
    <thead style="background-color: #C12E2A; color:white;">
      <tr>
        <th>Dataset title</th>
        <th>Release date</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><a href="#" class="table-body-1"><p  class="table-body-1">Population under 16 years of age by status of living arrangements, sex and literacy status (2011-12)</p></a>
        	<p class="table-body-2">This dataset contains population under 16 years of age by status of living arrangements, sex and literacy status.</p></td>
        <td>2016/10/06</td>
      </tr>
      <tr>
        <td><a href="#" class="table-body-1"><p  class="table-body-1">Population under 16 years of age by status of living arrangements, age groups and sex (2011-12)</p></a>
        	<p class="table-body-2">This dataset population under 16 years of age living with parents,mother, father, father and step-mother, mother and step-father, other relatives, employer and others by age groups and sex. </p></td>
        <td>2016/10/06</td>
      </tr>
      <tr>
          <td><a href="#"><p  class="table-body-1">Population under 16 years of age by status of living arrangements, age groups and sex (2011-12)</p></a>
              <p class="table-body-2">This dataset population under 16 years of age living with parents,mother, father, father and step-mother, mother and step-father, other relatives, employer and others by age groups and sex. </p></td>
          <td style="text-align: center">2016/10/06</td>
      </tr>
      <tr>
          <td><a href="#"><p  class="table-body-1">Population under 16 years of age by status of living arrangements, age groups and sex (2011-12)</p></a>
              <p class="table-body-2">This dataset population under 16 years of age living with parents,mother, father, father and step-mother, mother and step-father, other relatives, employer and others by age groups and sex. </p></td>
          <td ><p class="date">2016/10/06</p></td>
      </tr>
    </tbody>
  </table>

<div class="col-md-9">
    <nav aria-label="Page navigation example" class="page">
        <ul class="pagination justify-content-center pagebtn">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
</div>


		</div>
                <div class="col-md-1"></div>
            </div>

    </div>

<?php include('includes/footer.php'); ?>