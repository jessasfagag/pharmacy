<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pharmacy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="/css/index.css">
  </head>
  <body>

    <!-- navbar -->
    <nav>
        <div class="logo">
            <img src="./image/logop.png" alt="Logo" class="logo-img">
            <h2>Nine27Pharmacy</h2>
        </div>
        <div class="menu-toggle" id="menuToggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul id="navMenu">
            <li><a href="#home">Home</a></li>
            <li><a href="#medicine">Medicine</a></li>
            <li><a href="#Prescription">Prescription</a></li>
            <li><a href="#">Announcements</a></li>
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <!-- end -->
    
    <!-- home page -->
    <div class="home" id="home">
        <div class="box1">
            <h1>Nine27 Pharmacy</h1>
            <p>Your health is our priority</p>
            <button class="btn1">Download APK</button>  
        </div>
        <div class="picture"></div>
    </div>
    <!-- end -->

    <!-- Medicine -->
    <div class="medicine" id="medicine">
        <div class="text">
            <h1>Medicine Information</h1>
            <div class="inp">
                <input type="search" placeholder="What do you want?" id="myinput"
                    onfocus="this.placeholder=''" 
                    onblur="this.placeholder='What do you want?'" >
                <i class="fa fa-search"></i>
            </div>
        </div>
        <div class="cotainer">
            <div class="products">
                <img src="./image/down arrow.webp">
                <h4>arrow</h4>
                <h2>kupal</h2>
                <span>$ 10</span>
            </div>
            <div class="products">
                <img src="2.webp">
                <h4>bossing</h4>
                <h2>musta buhay</h2>
                <span>$ 20</span>
            </div>
            <div class="products">
                <img src="3.webp">
                <h4>qpal kaba</h4>
                <h2>kurakupal</h2>
                <span>$ 30</span>
            </div>
            <div class="products">
                <img src="4.webp">
                <h4>asan ang sabaw</h4>
                <h2>magkani</h2>
                <span>$ 10</span>
            </div>
            <div class="products">
                <img src="3.webp">
                <h4>hotdog</h4>
                <h2>main</h2>
                <span>$ 30</span>
            </div>
            <div class="products">
                <img src="4.webp">
                <h4>tabe mainit</h4>
                <h2>gagagaghah</h2>
                <span>$ 10</span>
            </div>
        </div>
    </div>
    <!-- end -->
     
    <!-- Prescription -->
    <div class="Prescription" id="Prescription">
        <div class="faq_form">
            <div class="form-wrapper">   
                <div class="form-header">
                    <h1>Online Prescription Form</h1>
                </div>
                @if(session()->has('success'))
                    <div class="alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="form-card">
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Patient Name:</label>
                            <input type="text" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">Email Address:</label>
                            <input type="text" name="email" value="{{ old('email') }}">
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="">File</label>
                            <input type="file" name="image">
                            @error('image')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <button type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div> 
            
            <div class="faq-section">
                <div class="faq-header">
                    <h1>Frequently Asked Questions</h1>
                </div>
                <div class="faq1">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>What products do you sell?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>  
                                We offer over-the-counter (OTC) and prescription medicines, vitamins,
                                 health supplements, personal care items, and basic medical supplies.
                             </p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do I need a prescription to buy medicine?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>
                               A valid prescription is required for prescription medications. However, 
                                OTC products can be purchased without a prescription.
                            </p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>How do I place an order online?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quisquam aliquam, id tempora consectetur natus aspernatur iste illo? Id autem vitae perspiciatis error quam soluta fuga, reprehenderit mollitia ipsam labore.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Do you deliver nationwide?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>?</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Can I cancel or return my order?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p> Orders may be canceled before they are shipped. For returns and refunds, 
                                items must be unopened, unused, and returned according to our return policy.
                            </p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Are your medicines safe and authentic?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Absolutely. All our products come from FDA-approved suppliers and licensed
                               distributors. We ensure the safety, quality, and authenticity of every item.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="web.js"></script>
    <script src="/js/index.js"></script>
  </body>
</html>
