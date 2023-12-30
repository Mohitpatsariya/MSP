<?php include("userheader.php"); 
      include("conn.php"); 
?>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img width="1400" height="300" src="image/shiv1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img width="1400" height="300" src="image/mama.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img width="1400"height="300" src="image/A.jpg"  class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p> -->
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-2">
        <h1 class="display-6 fw-bold">Ladli Behna Yojna</h1>
        <p class="col-md-12 fs-5">Ladli Laxmi Yojana is a scheme introduced by Government of Madhya Pradesh. It was inaugurated by Chief Minister Shri Shivraj Singh Chouhan on 2 May 2007, which was followed by expansion to six additional states including Uttar Pradesh, Bihar, Delhi, Chhattisgarh, Jharkhand and Goa.It came into effect from 7 April 2007....</p>
        <button class="btn btn-primary btn-lg" type="button">Read More</button>
      </div>
    </div>

<div class="row align-items-md-stretch" id="schemes">
      <div class="col-md-12">
        <div class="h-100 p-3  rounded-3">
          <h2>Government Schemes</h2>
          <p>
          <table class="table">
            <tr><th>Scheme Name </th> <th>Description </th> <th>start date</th><th>Last date</th> <th>Apply</th></tr>
        <?php 
            $query1="select * from schemesid ";
            $query2 = mysqli_query($con,$query1);
            
            while($result =mysqli_fetch_array($query2)){
             ?>   
            <tr><td><?php echo $result['schemename'];  ?> </td> 
            <td><?php echo $result['description'];  ?>  </td> 
            <td><?php echo $result['uploadeddt'];  ?></td>
            <td><?php echo $result['lastdate'];  ?></td> 
            <td><a href=" applyhtml.php  <?php ?>"> Apply</a></td></tr>
       <?php
            }
        ?>    
        </div>
    </div>
    </table>
    
        </p>
        </div>
      </div>
      <div class="col-md-12" id="aboutUs">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2> <ul>About Us</ul></h2>
        <ul><span><b>Offline Application Process Scheme</b></ul></span></ul>
<ul>In case you wish to apply for the Ladli Laxmi Yojana offline, you need to physically submit the application form along with the relevant documents to the officer in-charge of the registration center at the Lok Seva Kendra.</ul>
<ul>The Ladli Laxmi Yojana form can be availed the Anganwadi centers, Gram Panchayat or Municipal Corporations in the State.</ul> 
<ul>Upon submission, the application is sent for further processing and once approved, the monetary benefits will be transferred to the applicant’s bank account directly.</ul>
<ul>Since the implementation of Ladli Laxmi Yojana, a wave of positive attitude towards the birth of the girl child is coming up in the society. With the monetary assistance for the education and marriage of the girl, the vision of girls as a burden on the family is also changing rapidly.</p></ul>
                            </div>
      </div>
    </div>
<br>
<?php include("userfooter.php"); ?>