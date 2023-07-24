
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

 <style>
  @media  (max-width: 850px) {
  

  .mySearch{
    margin-top: 6px;
  }
}

@media  (max-width: 280px) {

.searchBox{
width: 150px;
}

}

.searchBox{
width: 230px;
}


@media (max-width: 850px) {
      .logo {
        float: right;
      }
    }

    @media (min-width: 850px) {
    .myNav{
      display: flex;
    }
    }

    .myNav {
      justify-content: space-between;
      /* position: fixed; */
      width: 100%;
      z-index: 100;
    }


 </style>
  
</head>

    <body>
      
    <?php require 'nav_bar.php';?>
    
        <div style="margin-top: 40px;padding-bottom:40px;" class="card-body">
        <div class="toolbar">
        
        </div>
        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
         <th class="disabled-sorting text-right">Actions</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
        <th>Name</th>
        <th>Position</th>
        <th>Office</th>
        <th>Age</th>
        <th class="disabled-sorting text-right">Actions</th>
        </tr>
        </tfoot>
        <tbody>
        <tr>
        <td>Tiger Nixon</td>
        <td>System Architect</td>
        <td>Edinburgh</td>
        <td>61</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Garrett Winters</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>63</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Ashton Cox</td>
        <td>Junior Technical Author</td>
        <td>San Francisco</td>
        <td>66</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Cedric Kelly</td>
        <td>Senior Javascript Developer</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Airi Satou</td>
        <td>Accountant</td>
        <td>Tokyo</td>
        <td>33</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Brielle Williamson</td>
        <td>Integration Specialist</td>
        <td>New York</td>
        <td>61</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Herrod Chandler</td>
        <td>Sales Assistant</td>
        <td>San Francisco</td>
        <td>59</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Rhona Davidson</td>
        <td>Integration Specialist</td>
        <td>Tokyo</td>
        <td>55</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Colleen Hurst</td>
        <td>Javascript Developer</td>
        <td>San Francisco</td>
        <td>39</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Sonya Frost</td>
        <td>Software Engineer</td>
        <td>Edinburgh</td>
        <td>23</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Jena Gaines</td>
        <td>Office Manager</td>
        <td>London</td>
        <td>30</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Quinn Flynn</td>
        <td>Support Lead</td>
        <td>Edinburgh</td>
        <td>22</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Charde Marshall</td>
        <td>Regional Director</td>
        <td>San Francisco</td>
        <td>36</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Haley Kennedy</td>
        <td>Senior Marketing Designer</td>
        <td>London</td>
        <td>43</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Tatyana Fitzpatrick</td>
        <td>Regional Director</td>
        <td>London</td>
        <td>19</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
         </td>
        </tr>
        <tr>
        <td>Michael Silva</td>
        <td>Marketing Designer</td>
        <td>London</td>
        <td>66</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Paul Byrd</td>
        <td>Chief Financial Officer (CFO)</td>
        <td>New York</td>
        <td>64</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Gloria Little</td>
        <td>Systems Administrator</td>
        <td>New York</td>
        <td>59</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Bradley Greer</td>
        <td>Software Engineer</td>
        <td>London</td>
        <td>41</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Dai Rios</td>
        <td>Personnel Lead</td>
        <td>Edinburgh</td>
        <td>35</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Jenette Caldwell</td>
        <td>Development Lead</td>
        <td>New York</td>
        <td>30</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Yuri Berry</td>
        <td>Chief Marketing Officer (CMO)</td>
        <td>New York</td>
        <td>40</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Caesar Vance</td>
        <td>Pre-Sales Support</td>
        <td>New York</td>
        <td>21</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Doris Wilder</td>
        <td>Sales Assistant</td>
        <td>Sidney</td>
        <td>23</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Angelica Ramos</td>
        <td>Chief Executive Officer (CEO)</td>
        <td>London</td>
        <td>47</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Gavin Joyce</td>
        <td>Developer</td>
        <td>Edinburgh</td>
        <td>42</td>
        <td class="text-right">
         <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Jennifer Chang</td>
        <td>Regional Director</td>
        <td>Singapore</td>
        <td>28</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Brenden Wagner</td>
        <td>Software Engineer</td>
        <td>San Francisco</td>
        <td>28</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Fiona Green</td>
        <td>Chief Operating Officer (COO)</td>
        <td>San Francisco</td>
        <td>48</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Shou Itou</td>
        <td>Regional Marketing</td>
        <td>Tokyo</td>
        <td>20</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Michelle House</td>
        <td>Integration Specialist</td>
        <td>Sidney</td>
        <td>37</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Suki Burks</td>
        <td>Developer</td>
        <td>London</td>
        <td>53</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Prescott Bartlett</td>
        <td>Technical Author</td>
        <td>London</td>
        <td>27</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Gavin Cortez</td>
        <td>Team Leader</td>
        <td>San Francisco</td>
        <td>22</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Martena Mccray</td>
        <td>Post-Sales support</td>
        <td>Edinburgh</td>
        <td>46</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Unity Butler</td>
        <td>Marketing Designer</td>
        <td>San Francisco</td>
        <td>47</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Howard Hatfield</td>
        <td>Office Manager</td>
        <td>San Francisco</td>
        <td>51</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Hope Fuentes</td>
        <td>Secretary</td>
        <td>San Francisco</td>
        <td>41</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Vivian Harrell</td>
        <td>Financial Controller</td>
        <td>San Francisco</td>
        <td>62</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Timothy Mooney</td>
        <td>Office Manager</td>
        <td>London</td>
        <td>37</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Jackson Bradshaw</td>
        <td>Director</td>
        <td>New York</td>
        <td>65</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        <tr>
        <td>Olivia Liang</td>
        <td>Support Engineer</td>
        <td>Singapore</td>
        <td>64</td>
        <td class="text-right">
        <a href="#" class="btn btn-round btn-info btn-icon btn-sm like"><i class="fas fa-heart"></i></a>
        <a href="#" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="far fa-calendar-alt"></i></a>
        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove"><i class="fas fa-times"></i></a>
        </td>
        </tr>
        </tbody>
        </table>
        </div>
        </div>
        </div> 
        
        <script src="assets/js/jquery-3.5.1.jquery.min.js"></script>
        <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    
        <script>
          $(document).ready(function(){
            
            
          
            
            // Facebook Pixel Code Don't Delete
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
        n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
        document,'script','connect.facebook.net/en_US/fbevents.js');
        
        try{
          fbq('init', '111649226022273');
          fbq('track', "PageView");
        
        }catch(err) {
          console.log('Facebook Track Error:', err);
        }
        
          });
        </script>
        <noscript>
          <img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1"
        />
        
        </noscript>
 
        <script>
          $(document).ready(function() {
            var Icon_next = '<i class="fas fa-chevron-circle-right fa-lg"></i>'
            var Icon_previous = '<i class="fas fa-chevron-circle-left fa-lg"></i>'
            var Icon_last = '<i class="	fas fa-angle-double-right fa-lg"></i>'
            var Icon_first = '<i class="	fas fa-angle-double-left fa-lg"></i>'
            $('#datatable').DataTable({
              "pagingType": "full_numbers",
              "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
              responsive: true,
              language: {
              search: "_INPUT_",
              searchPlaceholder: "Search records",
              paginate: {
                next: ""+Icon_next+"",
                previous:""+Icon_previous+"",
                last:""+Icon_last+"",
                first:""+Icon_first+""
              }
             

              }

              
        
            });


                //   $('#datatable').dataTable( {
                // "language": {
                //     "paginate": {
                //     "next": "Next page"
                //     }
                // }
                // } );
        
            var table = $('#datatable').DataTable();
        
            // Edit record
            table.on( 'click', '.edit', function () {
              $tr = $(this).closest('tr');
              if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
              }
        
              var data = table.row($tr).data();
              alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
            } );
        
            // Delete a record
            table.on( 'click', '.remove', function (e) {
              $tr = $(this).closest('tr');
              if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
              }
              table.row($tr).remove().draw();
              e.preventDefault();
            } );
            
        
            //Like record
            table.on( 'click', '.like', function () {
              alert('You clicked on Like button');
            });
          });
        </script>    
</body>
</html>