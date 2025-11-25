<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sharspace.click</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table width="800" border="0" cellpadding="0" cellspacing="0" align="center" class="main-table">
        <tr>
            <td colspan="2" class="header-section">
          
<a href="ascii/" target="_blank" class="ascii-link">
  <pre class="ascii-banner">

███████╗ ██╗  ██╗  █████╗  ██████╗  ███████╗ ██████╗   █████╗   ██████╗ ███████╗
██╔════╝ ██║  ██║ ██╔══██╗ ██╔══██╗ ██╔════╝ ██╔══██╗ ██╔══██╗ ██╔════╝ ██╔════╝
███████╗ ███████║ ███████║ ██████╔╝ ███████╗ ██████╔╝ ███████║ ██║      █████╗  
╚════██║ ██╔══██║ ██╔══██║ ██╔══██╗ ╚════██║ ██╔═══╝  ██╔══██║ ██║      ██╔══╝  
███████║ ██║  ██║ ██║  ██║ ██║  ██║ ███████║ ██║      ██║  ██║ ╚██████╗ ███████╗
╚══════╝ ╚═╝  ╚═╝ ╚═╝  ╚═╝ ╚═╝  ╚═╝ ╚══════╝ ╚═╝      ╚═╝  ╚═╝  ╚═════╝ ╚══════╝
                                                                        

  </pre>
</a>

                <marquee behavior="scroll" direction="left" class="tagline">
    <span id="marquee-text"> Loading marquee text... </span>
</marquee>

<script>
  fetch('marquee-text.txt')
    .then(response => response.text())
    .then(text => {
      document.getElementById('marquee-text').textContent = text;
    })
    .catch(error => {
      console.error('Error loading marquee text:', error);
      document.getElementById('marquee-text').textContent = ' Could not load marquee BS. ';
    });
</script>

            </td>
        </tr>
        <tr>
            <td width="150" valign="top" class="nav-column">
                <div class="nav-section">
                    <h3>Navigation</h3>
                    <div class="nav-links">
                        <a href="#" onclick="showPage('home')" class="nav-link active">Home</a>
                        <a href="#" onclick="showPage('about')" class="nav-link">About Me</a>
                        <a href="#" onclick="showPage('pics')" class="nav-link">Current Projetcs</a>
                        <a href="#" onclick="showPage('contact')" class="nav-link">Contact</a>
                        <a href="#" onclick="showPage('cool')" class="nav-link">Cool Stuff</a>
                      	<a href="#" onclick="showPage('donate')" class="nav-link">Donate</a>
                    </div>
                </div>
                
                <div class="sidebar-widget">
                    <h4>Zen Section</h4>
                    <div class="counter">
                        <img src="https://blob.gifcities.org/gifcities/4JXVM2VX7AWSC3TX25QIWLM2O4CLVXC7.gif" alt="0" style="background: #FF0000; width: 100px; height: 200px; display: inline-block;">
                
                    </div>
                </div>

                <div class="sidebar-widget">
                    <h4>Music</h4>
                  	<h>Artist Socials (Thanks Armand!):</h>
                    <p><a href="https://x.com/ArmandRonan6969/"target="_blank">X</a> | <a href="https://soundcloud.com/armandronan/"target="_blank">SoundCloud</a> | <a href="https://www.youtube.com/@ArmandRonan/"target="_blank">YT</a></p>
                  <audio id="background-audio" loop autoplay>
    				<source src="song.mp3" type="audio/mpeg">
                  </audio>
                  <button id="bg-toggle">Mute</button>
                </div>
              <div class="sidebar-widget">
                    <h4>Github</h4>
                <iframe src="https://ghbtns.com/github-btn.html?user=Alidevmerlin&repo=Sharspace.click&type=star&count=true&size=large" frameborder="0" scrolling="0" width="170" height="30" title="GitHub" ></iframe>
                </div>
              
            </td>
            <td width="650" valign="top" class="content-column">
              
                
                <!-- Home Page -->
                <div id="home" class="page-content active">
                    <h1>Welcome to Sharspace!</h1>
                    <p><strong>Site forever under construction...</strong></p>
                    <h4>You are one of the lucky few, who have the pleasure of experiencing Sharspace. This here site is my little corner of the internet where I share the projects I’ve been working on in my spare time.  It’s a mix of different things I’m passionate about, all in one place. I hope you find something here that sparks your interest or inspires you. You may have already noticed that this site is not the best looking, functioning, or even coded, but thats all part of it I promise. Thanks for stopping by, and don't forget to send me an email saying hi! </h4>
                    
                    <p><blink>POOP!</blink></p>
                    

                  
                  
                  <center>
						<img 
                          src="https://blob.gifcities.org/gifcities/A2YUGUHTNVJBC33UOWIQU4CFDNOPQ2NJ.gif" 
                          alt="Space"
                          style="display:block; margin:0 auto; max-width:400px; height:auto; border:0;"
                      >
                    <a href="https://www.hamqsl.com/solar.html" title="Click to add Solar-Terrestrial Data to your website!"><img src="https://www.hamqsl.com/solarsystem.php"></a>
  
                     
                  </center>
                  
                  <center>
						<a href="https://www.hamqsl.com/solar.html" title="Click to add Solar-Terrestrial Data to your website!"><img src="https://www.hamqsl.com/solarsun.php"></a>
                  </center>

                  
                    
                </div>

                <!-- About Me Page -->
                <div id="about" class="page-content">
                    <h1>About Me</h1>
                    <h6>Hello there! I am the maintainer of Sharspace! I am an advocate for consumer privacy, supporter of the FOSS movement, and a believer in distrubed/decentralized tech. Sharspace has been a bit of a passion-project for me, and I enjoy working on it, and sharing it with people across the globe.</h6>
                    
                    <p>When I'm not working on Sharspace, you can find me:</p>
                    <ul>
                        <li>Playing tennis</li>
                        <li>Steeping very strong tea</li>
                        <li>Learning Esperanto</li>
                        <li>Taking care of my 2 cats</li>
                      	<li>Working on my homelab</li>
                      	<li>Communicating over Meshtastic</li>
                      	<li>and working on the projects listed on the Current Projects page</li>
                    </ul>
                    
                  
                    
                    <h2>Thanks for visiting my site! Don't forget to send me an email, and I'll get back to you ASAP!</h2>
                  <div class="rainbow-text">
                        SCREW CENSORSHIP
                    SCREW KYC
                      </div>
                  
                </div>
            
              
              
              	<!-- Donate -->
                <div id="donate" class="page-content">
                    <h1>Please Donate</h1>
                    <h2>Sharspace Costs Money!</h2>
                    
                    <p>Between hosting costs and domain leasing, keeping Sharspace online isn’t cheap. Sharspace depends on the support of its community to continue its mission. My goal is to share Sharspace with people around the world, fostering connection across borders. Despite Sharspace being a simple website, I hope it can grow into a cultural phenomenon that brings people together.</p>
                  <p>Payment Options:</p>
                  <p>BTC: bc1qk9hhhgsfsqugjrk5dqyxnv46yrmjnur5trzfvk</p>
                  <p>LN BTC: sharspace@blink.sv</p>

                  
                    
                    
                  <h4><strong>ALL DONATIONS GO TO ADVERTISING! SHARSPACE IS A NON-PROFIT!</strong><h4>
                    
                  <pre>Anything is truly appreciated.</pre>
                    <center>
						<img 
                          src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExenNnZW14YWdxMjFqZXFueGUya2VhN2FydHJ0dWNxcHZ6djh1bmlsOCZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/iFyQMfqxYFhO2b4o3T/giphy.gif" 
                          alt="Donate"
                          style="display:block; margin:0 auto; max-width:400px; height:auto; border:0;"
                      >
                </div>


              
                <!-- My Projetcs Page -->
                <div id="pics" class="page-content">
                    <h1>Current Projects</h1>
                    <p>Here are some of the projects I have been working on and I have completed.</p>
                    
                    <table border="1" cellpadding="8" cellspacing="0" width="100%">
                        <tr>
                            <th>Project Name</th>
                            <th>Progress</th>
                            <th>Link</th>
                        </tr>
                        <tr>
                            <td>Develop SBC Computing Cluster (Replace Current Server)</td>
                            <td style="background-color: orange; text-align: center;">Paused</td>
                            <td><a href="#" target="_blank">N/A</a></td>
                        </tr>
                        <tr>
                            <td>Cashu.me Web Wallet Instance (LN,CASHU)</td>
                            <td style="background-color: orange; text-align: center;">Paused</td>
                            <td><a href="https://cashu.sharspace.click" target="_blank">Web Wallet</a></td>
                        </tr>
                        <tr>
                            <td>Custom Linux Distro (Shartronica)</td>
                            <td style="background-color: orange; text-align: center;">Paused</td>
                            <td><a href="https://github.com/Alidevmerlin/Shartronica---Custom-Distro" target="_blank">GitRepo</a></td>
                        </tr>
                        <tr>
                            <td>.onion of Sharspace</td>
                            <td style="background-color: lime; text-align: center;">Active!</td>
                            <td><a href="http://l7ojztk4tezati6fxdnlv7hrhdnsapmcdukyu4tp4ae32ee566cee4qd.onion" target="_blank">Hidden Service</a></td>
                        </tr>
                        <tr>
                            <td>Public LNbits Instance</td>
                            <td style="background-color: yellow; text-align: center;">In Progress</td>
                            <td><a href="#" target="_blank">N/A</a></td>
                        </tr>
                        <tr>
                            <td>SearXNG Instance</td>
                            <td style="background-color: lime; text-align: center;">Active!</td>
                            <td><a href="https://searxng.sharspace.click" target="_blank">SearXNG</a></td>
                        </tr>
                        <tr>
                            <td>Phone Buzzer (Buzz my phone at anytime)</td>
                            <td style="background-color: orange; text-align: center;">Paused</td>
                            <td><a href="#" target="_blank">N/A</a></td>
                        </tr>
                        <tr>
                            <td>Subdomain Purchase Site</td>
                            <td style="background-color: Orange; text-align: center;">Paused</td>
                            <td><a href="#" target="_blank">N/A</a></td>
                        </tr>
                    </table>

                    
                </div>

                 <!-- Contact Page -->
                  <div id="contact" class="page-content">
                      <h1>Contact Me</h1>
                      <h2>Don't be shy!</h2>
                    	<h2>If you want to talk, or get a subdomain</h2>
                        <h2>Email me at:</h2>
                        

                      <div class="rainbow-text">
                        fan@sharspace.click<br>
                        fan@sharspace.click<br>
                        fan@sharspace.click<br>
                        fan@sharspace.click<br>
                        fan@sharspace.click<br>
                        fan@sharspace.click
                      </div>

                      <style>
                        .rainbow-text {
                          font-size: 80px;
                          font-weight: bold;
                          text-align: center;
                          text-shadow: 1px 1px 0px #FFFFFF;
                          width: 100%;
                          margin: 20px auto;

                          /* Animation */
                          animation: rainbow 7s linear infinite;
                        }

                        @keyframes rainbow {
                          0%   { color: red; }
                          14%  { color: orange; }
                          28%  { color: yellow; }
                          42%  { color: green; }
                          57%  { color: blue; }
                          71%  { color: indigo; }
                          85%  { color: violet; }
                          100% { color: red; }
                        }
                        
                        
                      </style>

                       

                      
                  </div>


                <!-- Cool Stuff Page -->
                <div id="cool" class="page-content">
                    <h1>Cool Stuff</h1>
                    <h6>Here are some things that I found on the web that I thought were cool or helpful. I have not been paid by anyone to promote anything. </h6>
                    
                   
                    
                    <h3> Cool Links</h3>
                    <ul>
                        <li><a href="https://fmhy.net/" target="_blank">FMHY (Some Cool Free Stuff)</a></li>
                        <li><a href="https://www.gutenberg.org/" target="_blank">Gutenberg (Free Books)</a></li>
                        <li><a href="https://www.watchiptv.xyz/" target="_blank">Online IPTV for Browser (WatchIPTV) </a></li>
                        <li><a href="https://jackal.surge.sh/" target="_blank">Alternative IPTV (Jackal)</a></li>
                      <li><a href="https://bitcoin.rocks/" target="_blank">BTC EDU</a></li>
                      <li><a href="bitcoin.pdf" target="_blank">BTC Whitepaper</a></li>
                    </ul>

                    
                  
                    
                    <h3>Statistics</h3>
                    <table border="1" cellpadding="5" style="background: #FFFFCC;">
                        <tr>
                            <td><strong>Total Visits:</strong></td>
                            <td><blink>100,000+<blink></td>
                        </tr>
                        <tr>
                            <td><strong>Server Stats:</strong></td>
                            <td><a href="https://stats.sharspace.click/"target="_blank">STATS</a></td>
                        </tr>
                        
                    </table>
                </div>

            </td>
        </tr>
        <tr>
            <td colspan="2" class="footer-section">
                <hr>
                
            </td>
        </tr>
    </table>

    <script src="app.js"></script>
</body>
</html>
