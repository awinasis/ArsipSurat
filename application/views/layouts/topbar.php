 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

     <!-- Main Content -->
     <div id="content">

         <!-- Topbar -->
         <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

             <!-- Sidebar Toggle (Topbar) -->
             <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                 <i class="fa fa-bars"></i>
             </button>

             <!-- Topbar Navbar -->
             <ul class="navbar-nav ml-auto">

                 <div class="topbar-divider d-none d-sm-block"></div>
                 <!-- Topbar Navbar -->
                 <div align="center">
                     <!-- Menampilkan Hari, Bulan dan Tahun -->
                     <script type='text/javascript'>
                         var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                         var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
                         var date = new Date();
                         var day = date.getDate();
                         var month = date.getMonth();
                         var thisDay = date.getDay(),
                             thisDay = myDays[thisDay];
                         var yy = date.getYear();
                         var year = (yy < 1000) ? yy + 1900 : yy;
                         document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                     </script>

                     <!-- Menampilkan Jam (Aktif) -->
                     <div id="clock"></div>
                     <script type="text/javascript">
                         function showTime() {
                             var a_p = "";
                             var today = new Date();
                             var curr_hour = today.getHours();
                             var curr_minute = today.getMinutes();
                             var curr_second = today.getSeconds();
                             if (curr_hour < 12) {
                                 a_p = "AM";
                             } else {
                                 a_p = "PM";
                             }
                             if (curr_hour == 0) {
                                 curr_hour = 12;
                             }
                             if (curr_hour > 12) {
                                 curr_hour = curr_hour - 12;
                             }
                             curr_hour = checkTime(curr_hour);
                             curr_minute = checkTime(curr_minute);
                             curr_second = checkTime(curr_second);
                             document.getElementById('clock').innerHTML = curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
                         }

                         function checkTime(i) {
                             if (i < 10) {
                                 i = "0" + i;
                             }
                             return i;
                         }
                         setInterval(showTime, 500);
                     </script>
                 </div>
             </ul>
         </nav>

         <!-- End of Topbar -->