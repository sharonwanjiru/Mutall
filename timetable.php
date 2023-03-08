<!DOCTYPE html>
<html lang="en">
    <head>
        <title>TimeTable</title>
        <!-- Link to css -->
        <!-- <link rel="stylesheet" type="text/css" href="http://206.189.207.206/tracker/timetable/timetable.css"> -->
        <link rel="stylesheet" type="text/css" href="timetable.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
    </head>
    <body>
     <!-- Navigation Bar -->
    <header>
        <div class="logo">
          <p>Mutall</p>
        </div>
          <nav>
            <ul class="nav-list">
              <li class="nav"><a class="ul" href="timetable.php">Home</a></li>
              <li class="nav"><a class="ul" href="#">About</a></li>
              <li class="nav"><a class="ul" href="#">Portfolios</a></li>
            </ul>
          </nav>  
          <button><a class="ul" href="#">Chat</a></button>
       
		</header>
        <!-- Title and Time -->
     <div class="title">
        <h1>TimeTable</h1>
     </div>
     <div class="time">
        <h5>  
        <?php 
            echo date("l jS \of F Y ");
         ?>        
        </h5>  
    </div>
    
     
     <!-- <div class="day highlight" id="monday"> -->
     <div class="day <?php if(date('l') == 'Monday') echo 'highlight'; ?> " id="monday">
         <h2>Monday</h2>
          <!-- Kangara Details -->
          <div class="details">   
                <div class="img">
                    <img class="rounded-corners" src="http://drive.google.com/uc?export=view&id=10KYtxL82ANblZbwrAgMc_R7WoHTu8KKD" alt="" 
                        >
                </div>     
            <div class="portfolio">
                <a href="http://206.189.207.206/tracker/portfolio/2023/kangara.html">George Kanga'ra(GK)</a><br>
                <p><small>Bsc Computer Technology: 2019</small></p>
            </div>        
          </div>
            <!-- Andrew Details -->
          <div class="details">
            <div class="img">
                    <img class="rounded-corners" src="http://206.189.207.206/tracker/portfolio/2023/image/drew.jpg" alt="" 
                        >
            </div>
            <div class="portfolio">
                <a href="http://206.189.207.206/tracker/portfolio/2023/mugambi.html">Andrew Mugambi(AM)<br></a>
                <p><small>Bsc. Business Information Technology:2016</small></p>
              </div> 
          </div>
           <!-- Isaac Details -->
          <div class="details">
                <div class="img">
                    <a href="https://lh3.googleusercontent.com/6RSUmagWNh_WTpC3ttsnCGQy7l3X-hyXmpotYYRI5yufzTYYv3-V0jMD5kaBrcXVoz3aXgTvOqG035xnWPgwRm8IntLM5eczOx-6QFCS4rcw7AK2dwV84OG3_MwHpFQhfe66sEdffw=w2400?source=screenshot.guru"> <img class="rounded-corners" src="https://lh3.googleusercontent.com/6RSUmagWNh_WTpC3ttsnCGQy7l3X-hyXmpotYYRI5yufzTYYv3-V0jMD5kaBrcXVoz3aXgTvOqG035xnWPgwRm8IntLM5eczOx-6QFCS4rcw7AK2dwV84OG3_MwHpFQhfe66sEdffw=w417-h315-p-k" /> </a>          
                </div>
                <div class="portfolio">
                    <a href="http://206.189.207.206/tracker/portfolio/2023/weru.html">Isaac Waweru(IW)<br></a> 
                    <p><small>N/A</small></p>
                </div>
          </div>   
            
     </div>
    
       <!-- Tuesday -->
     <div class="day <?php if(date('l') == 'Tuesday') echo 'highlight'; ?>" id="tuesday">
     <!-- <div class="day highlight" id="tuesday"> -->
        <h2>Tuesday</h2>
       <!-- Francis' Details -->
        <div class="details">
            <div class="img">
                    <img class="rounded-corners" src="  http://206.189.207.206/tracker/v/images/frank.jpg" alt="" 
                     >
            </div>
            <div class="portfolio">
            <a href="http://206.189.207.206/tracker/portfolio/2023/francis.html">Francis Nyakundi(FN)<br></a> 
            <p><small>N/A</small></p>
          </div>   
        </div>   
          <!-- George's Details -->
        <div class="details">
             <div class="img">
                    <a href="https://lh3.googleusercontent.com/x7nJjq2_nEWxboeNnPQq1lqGs55EZGVie8UatieTs31D9LSXZ0whOYX56QHZNpKaJyvBQY5iaT_V4vvVfWEpiGvo_HkBkGV-dX-MWV_LwaSlqtM2WpQBDynL_KZ6EUmgBFMg8j-nww=w2400?source=screenshot.guru"> <img class="rounded-corners" src="https://lh3.googleusercontent.com/x7nJjq2_nEWxboeNnPQq1lqGs55EZGVie8UatieTs31D9LSXZ0whOYX56QHZNpKaJyvBQY5iaT_V4vvVfWEpiGvo_HkBkGV-dX-MWV_LwaSlqtM2WpQBDynL_KZ6EUmgBFMg8j-nww=w600-h315-p-k" width="50px" height="50px"> </a>           
            </div> 
            <div class="portfolio">
                 <a href="http://206.189.207.206/tracker/portfolio/2023/Munya.html">George Munya(GM)<br></a>
                 <p><small>Diploma in Information Communication Technology:2022</small></p>
                </div>   
          </div>   
    </div>

    <!-- Wednesday -->
    <div class="day <?php if(date('l') == 'Wednesday') echo 'highlight'; ?> " id="wednesday">
    <!-- <div class="day highlight" id="tuesday"> -->
        <h2>Wednesday</h2>
       <!-- sharon's Details -->
        <div class="details">
            <div class="img">
                <a href="https://lh3.googleusercontent.com/Ffxiv6kqEGP8ixQF1udakKYXQ--cdvQcyc7PlaIMbZT6UZMGZZRscOsfJ7QU7W5kMKSQ29K1WSR8h88INpHbZMRxcByaAYXpj620IuM6Ks7O4FzL40HDI420v29xNTmrRMBEisdPqw=w2400?source=screenshot.guru"> <img class="rounded-corners" src="https://lh3.googleusercontent.com/Ffxiv6kqEGP8ixQF1udakKYXQ--cdvQcyc7PlaIMbZT6UZMGZZRscOsfJ7QU7W5kMKSQ29K1WSR8h88INpHbZMRxcByaAYXpj620IuM6Ks7O4FzL40HDI420v29xNTmrRMBEisdPqw=w600-h315-p-k"  overflow="hidden"> </a>  
            </div>
            <div class="portfolio">
            <a href="http://206.189.207.206/tracker/portfolio/2023/wanjiru.html">Sharon Wanjiru(SW))<br></a> 
            <p><small>Bsc. Informatics and Computer Science:2023</small></p>
          </div>   
        </div>   
          <!-- Carol's Details -->
        <div class="details">
             <div class="img">
    
             <a href="https://lh3.googleusercontent.com/6RSUmagWNh_WTpC3ttsnCGQy7l3X-hyXmpotYYRI5yufzTYYv3-V0jMD5kaBrcXVoz3aXgTvOqG035xnWPgwRm8IntLM5eczOx-6QFCS4rcw7AK2dwV84OG3_MwHpFQhfe66sEdffw=w2400?source=screenshot.guru"> <img class="rounded-corners" src="https://lh3.googleusercontent.com/6RSUmagWNh_WTpC3ttsnCGQy7l3X-hyXmpotYYRI5yufzTYYv3-V0jMD5kaBrcXVoz3aXgTvOqG035xnWPgwRm8IntLM5eczOx-6QFCS4rcw7AK2dwV84OG3_MwHpFQhfe66sEdffw=w417-h315-p-k" /> </a>         
            </div> 
            <div class="portfolio">
                 <a href="http://206.189.207.206/tracker/portfolio/2023/wawira.html">Carol Wawira(CW)<br></a>
                 <p><small>Diploma in Information Communication Technology:2022</small></p>
                </div>   
          </div>   
    </div>

    <!-- Thursday -->
    <div class="day <?php if(date('l') == 'Thursday') echo 'highlight'; ?> " id="thursday">
    <!-- <div class="day highlight" id="thursday"> -->
        <h2>Thursday</h2>
        <!-- Joan's details -->
        <div class="details">
            <div class="img">
                    <img class="rounded-corners" src="https://drive.google.com/uc?export=view&id=1gETpOsBaik0CumLnEZIEG1u4lkgi1ptl" alt="" 
                        >
            </div>
            <div class="portfolio">
            <a href="http://206.189.207.206/tracker/portfolio/2023/nduta.html">Joan Nduta(JN)<br></a> 
            <p><small>Bsc Economics and Statistics:2023</small></p>
          </div>   
        </div>   
         <!-- James Details -->
        <div class="details">
                <div class="img">
                    <img class="rounded-corners" src="https://lh3.googleusercontent.com/pw/AMWts8CyI5Nz8iqJYeK5oLBujhR23dm-FV4RtO-TUoxHoVMoT9_J0kpIi5StZsomLL4yeFi68a-fFvjjJashydaAYi4JnUAWYdE6qPGyefQ4yGkoa5_hCqi6B8CY_lO6xb0cg4qo-OEBqy0gU1Rtq74r-lrySQ=w708-h960-s-no?authuser=0" alt="Ndichu James Kiberenge image" width="50px" height="50px">
               </div>
            <div class="portfolio">
                <a href="http://206.189.207.206/tracker/portfolio/2023/kiberenge.html">Ndichu James Kiberenge(JK)<br></a> 
                <p><small>Diploma In IT:2020</small></p>
              </div>   
        </div>   
    </div>
      <!-- Friday -->
      <div class="day <?php if(date('l') == 'Friday') echo 'highlight'; ?>" id="friday">
    <!-- <div class="day highlight" id= "friday"> -->
        <h2>Friday</h2>
       <!-- Peter's details -->
        <div class="details">
                <div class="img">
                    <img class="rounded-corners" src="https://db3pap003files.storage.live.com/y4mYkTxSEdlNhFREDQ7FZvRrdtMGliIzvjGykN_dx2Y16yNfAx0pECbD0sPnKLa9Xmc4u0E--9P-m5PO02f5A2BiZxJd-Iz8d4FGlhV899pAgFC5tn_p2UIGUfyJUeW0kDeuTEGWqTvbvvb6W2dNW-nVWk-5knHb0dbsIdk21q-g5cI5mQjSMhznMMK1ksAMIWX?width=256&amp;height=256&amp;cropmode=none" width="50px" height="50px">
            </div>
            <div class="portfolio">
            <a href="http://206.189.207.206/tracker/portfolio/2023/kamau.html">Peter Kamau(PM)<br></a> 
            <p><small>Bsc. Mathematics and Computer Science:2019</small></p>
          </div>   
        </div>   
        <!-- Bernards Details -->
        <div class="details">
              <div class="img">
                   <a href="https://lh3.googleusercontent.com/6RSUmagWNh_WTpC3ttsnCGQy7l3X-hyXmpotYYRI5yufzTYYv3-V0jMD5kaBrcXVoz3aXgTvOqG035xnWPgwRm8IntLM5eczOx-6QFCS4rcw7AK2dwV84OG3_MwHpFQhfe66sEdffw=w2400?source=screenshot.guru"> <img class="rounded-corners" src="https://lh3.googleusercontent.com/6RSUmagWNh_WTpC3ttsnCGQy7l3X-hyXmpotYYRI5yufzTYYv3-V0jMD5kaBrcXVoz3aXgTvOqG035xnWPgwRm8IntLM5eczOx-6QFCS4rcw7AK2dwV84OG3_MwHpFQhfe66sEdffw=w417-h315-p-k" /> </a>
            </div>
            <div class="portfolio">
            <a href="http://206.189.207.206/tracker/portfolio/2023/muli.html">Bernard Muli(BM)<br></a> 
            <p><small>Certificate in IT:2017</small></p>
          </div>   
        </div>   
        <!-- Daniel's Details -->   
        <div class="details">
              
                
                <img class="rounded-corners" src="http://206.189.207.206/tracker/portfolio/2023/image/me.jpeg" alt="">
            </div>
            <div class="portfolio">
            <a href="http://206.189.207.206/tracker/portfolio/2023/muli.html">Daniel Kaniu(DK)<br></a> 
            <p><small>Bsc. Business Information Technology: 2019</small></p>
          </div>   
        </div>   

    </div>

    </body>
</html>

