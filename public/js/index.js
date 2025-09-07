// for search bar
$(document).ready(function() {
    $("#myinput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        
        if (value.trim() === '') {
            // If search is empty, show all products in original slides
            $(".slide").show();
            $(".slide .products").show();
            $(".slider-wrapper").show();
            $(".slider-controls").show();
            $(".slide-indicators").show();
        } else {
            // Hide slider controls and indicators
            $(".slider-wrapper").hide();
            $(".slider-controls").hide();
            $(".slide-indicators").hide();
            
            // Create search results container if it doesn't exist
            if ($("#searchResults").length === 0) {
                $(".cotainer").append('<div id="searchResults" class="search-results"></div>');
            }
            
            // Clear previous results
            $("#searchResults").empty();
            
            // Find all matching products
            var matchingProducts = $(".slide .products").filter(function () {
                return $(this).text().toLowerCase().indexOf(value) > -1;
            });
            
            if (matchingProducts.length > 0) {
                // Show all matching products in a grid
                $("#searchResults").html('<div class="search-grid"></div>');
                
                matchingProducts.each(function() {
                    $(this).clone().appendTo(".search-grid");
                });
                
                $("#searchResults").show();
            } else {
                $("#searchResults").html('<div class="no-results"><h3>No products found</h3></div>').show();
            }
        }
    });
});
// end

// Medicine Slider functionality
document.addEventListener('DOMContentLoaded', function() {
    let currentSlide = 0;
    const totalSlides = 5;
    const sliderWrapper = document.getElementById('sliderWrapper');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const indicators = document.querySelectorAll('.indicator');

    if (!sliderWrapper || !prevBtn || !nextBtn) return;

    function updateSlider() {
        const translateX = -currentSlide * 100;
        sliderWrapper.style.transform = `translateX(${translateX}%)`;
        
        // Update indicators
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('active', index === currentSlide);
        });
        
        // Update button states
        prevBtn.disabled = currentSlide === 0;
        nextBtn.disabled = currentSlide === totalSlides - 1;
    }

    function nextSlide() {
        if (currentSlide < totalSlides - 1) {
            currentSlide++;
            updateSlider();
        }
    }

    function prevSlide() {
        if (currentSlide > 0) {
            currentSlide--;
            updateSlider();
        }
    }

    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateSlider();
    }

    // Event listeners
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => goToSlide(index));
    });

    // Initialize slider
    updateSlider();
});

// Simple burger menu functionality
const menuToggle = document.getElementById('menuToggle');
const navMenu = document.getElementById('navMenu');

if (menuToggle && navMenu) {
    menuToggle.addEventListener('click', function() {
        navMenu.classList.toggle('active');
    });
    
    // Close menu when clicking on links
    const navLinks = navMenu.querySelectorAll('a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            navMenu.classList.remove('active');
        });
    });
}

// FAQ Accordion functionality
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', function() {
            // Close all other FAQ items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current FAQ item
            item.classList.toggle('active');
        });
    });
});