<section id="sp-call-to-action" class="sp-cta-section sp-cta-accent-bg">
    <div class="sp-cta-container">
      <div class="sp-cta-row sp-justify-center" data-aos="zoom-in" data-aos-delay="100">
        <div class="sp-cta-col">
          <div class="sp-cta-content">
            <h3 class="sp-cta-title">Looking to take your HR employees to a state of Smart Punch?</h3>
            <a href="/contact" class="sp-cta-btn-wrapper">
              <button type="button" class="sp-cta-btn">Request a Demo</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <style>
    /* Custom Call to Action Styles */
    .sp-cta-section {
      padding: 80px 0;
      position: relative;
      overflow: hidden;
      margin-bottom;: 100px
    }
    
    .sp-cta-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 15px;
    }
    
    .sp-cta-row {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -15px;
    }
    
    .sp-justify-center {
      justify-content: center;
    }
    
    .sp-cta-col {
      flex: 0 0 100%;
      max-width: 100%;
      padding: 0 15px;
    }
    
    .sp-cta-content {
      text-align: center;
      position: relative;
      z-index: 2;
    }
    
    .sp-cta-title {
      color: #17139C;
      font-size: 2.2rem;
      margin-bottom: 30px;
      font-weight: 700;
      line-height: 1.3;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    }
    
    .sp-cta-btn-wrapper {
      display: inline-block;
    }
    
    .sp-cta-btn {
      background: #ffffff;
      color: #e74c3c;
      border: none;
      padding: 16px 42px;
      font-size: 1.1rem;
      font-weight: 600;
      border-radius: 50px;
      cursor: pointer;
      transition: all 0.4s ease;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
      position: relative;
      overflow: hidden;
    }
    
    .sp-cta-btn::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, #e74c3c, #f39c12);
      z-index: -1;
      opacity: 0;
      transition: opacity 0.4s ease;
    }
    
    .sp-cta-btn:hover {
      color: #ffffff;
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
    }
    
    .sp-cta-btn:hover::before {
      opacity: 1;
    }
    
    /* Decorative Elements */
    .sp-cta-section::before {
      content: '';
      position: absolute;
      top: -50px;
      left: -50px;
      width: 200px;
      height: 200px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
    }
    
    .sp-cta-section::after {
      content: '';
      position: absolute;
      bottom: -80px;
      right: -80px;
      width: 250px;
      height: 250px;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 50%;
    }
    
    /* Responsive Design */
    @media (max-width: 992px) {
      .sp-cta-title {
        font-size: 1.8rem;
      }
      
      .sp-cta-btn {
        padding: 14px 36px;
      }
    }
    
    @media (max-width: 768px) {
      .sp-cta-section {
        padding: 60px 0;
      }
      
      .sp-cta-title {
        font-size: 1.6rem;
        margin-bottom: 25px;
      }
    }
    
    @media (max-width: 576px) {
      .sp-cta-title {
        font-size: 1.4rem;
      }
      
      .sp-cta-btn {
        padding: 12px 30px;
        font-size: 1rem;
      }
    }
  </style>