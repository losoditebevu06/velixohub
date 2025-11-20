<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VelixoHub Pizzeria - Authentic Italian Pizza & Fresh Ingredients</title>
    <meta name="description" content="VelixoHub Pizzeria serves authentic Italian pizza made with fresh ingredients and traditional recipes. Family-owned since 1987, we offer wood-fired pizzas, pasta, salads and more. Click here to continue exploring our delicious menu and rich history of serving the community with exceptional Italian cuisine.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', serif;
            line-height: 1.6;
            color: #2c3e50;
            background-color: #fdf6e3;
        }

        .nav-container-vx847 {
            background: linear-gradient(135deg, #d35400, #e67e22);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-kj923 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-section-mn456 {
            font-size: 2rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .nav-menu-qr789 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-item-zx234 a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-item-zx234 a:hover {
            color: #f39c12;
        }

        .hero-section-bg567 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/315755/pexels-photo-315755.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-rt890 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-lp123 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-df456 {
            font-size: 1.5rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        .cta-button-gh789 {
            background: #e74c3c;
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-gh789:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }

        .about-section-yu234 {
            padding: 5rem 2rem;
            background: white;
        }

        .container-max-wx567 {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title-op890 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .about-grid-as123 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .about-text-qw456 {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image-er789 {
            text-align: center;
        }

        .about-image-er789 img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .history-section-ty123 {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #ecf0f1, #bdc3c7);
        }

        .history-timeline-ui456 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .timeline-card-io789 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .timeline-card-io789:hover {
            transform: translateY(-5px);
        }

        .timeline-year-pa123 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        .specialties-section-sd456 {
            padding: 5rem 2rem;
            background: white;
        }

        .specialties-grid-fg789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .specialty-card-hj123 {
            text-align: center;
            padding: 2rem;
            border-radius: 10px;
            background: #f8f9fa;
            transition: all 0.3s ease;
        }

        .specialty-card-hj123:hover {
            background: #e9ecef;
            transform: scale(1.05);
        }

        .specialty-icon-kl456 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .ingredients-section-zm789 {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
        }

        .ingredients-grid-bn123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .ingredient-item-cv456 {
            text-align: center;
            padding: 1.5rem;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .community-section-xz789 {
            padding: 5rem 2rem;
            background: white;
        }

        .community-content-nm123 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
        }

        .reviews-section-vb456 {
            padding: 5rem 2rem;
            background: #f8f9fa;
        }

        .reviews-grid-cx789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .review-card-lk123 {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .review-stars-mj456 {
            color: #f39c12;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-author-nh789 {
            font-weight: bold;
            color: #2c3e50;
            margin-top: 1rem;
        }

        .process-section-pq123 {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #e74c3c, #c0392b);
            color: white;
        }

        .process-steps-rt456 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .process-step-uy789 {
            text-align: center;
            padding: 2rem;
            background: rgba(255,255,255,0.1);
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .step-number-wi123 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #f39c12;
        }

        .team-section-eo456 {
            padding: 5rem 2rem;
            background: white;
        }

        .team-grid-rp789 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .team-member-ta123 {
            text-align: center;
            padding: 2rem;
            background: #f8f9fa;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .team-member-ta123:hover {
            transform: translateY(-5px);
        }

        .member-photo-sy456 {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 0 auto 1rem;
            background: #bdc3c7;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
        }

        .sustainability-section-ud789 {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
        }

        .sustainability-grid-if123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .sustainability-card-og456 {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }

        .events-section-ph789 {
            padding: 5rem 2rem;
            background: white;
        }

        .events-grid-qj123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .event-card-rk456 {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
            border-left: 5px solid #e74c3c;
        }

        .footer-section-sl789 {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-grid-tm123 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-column-un456 h3 {
            margin-bottom: 1rem;
            color: #f39c12;
        }

        .footer-bottom-vo789 {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #34495e;
        }

        .modal-overlay-wp123 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-xq456 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-yr789 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .continue-btn-zs123 {
            background: #27ae60;
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            margin: 1rem 0;
            transition: all 0.3s ease;
        }

        .continue-btn-zs123:hover {
            background: #229954;
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .nav-menu-qr789 {
                display: none;
            }
            
            .hero-title-lp123 {
                font-size: 2.5rem;
            }
            
            .about-grid-as123,
            .community-content-nm123 {
                grid-template-columns: 1fr;
            }
            
            .section-title-op890 {
                font-size: 2rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%30%31%31%65%33%33%30%33%65%63%68%6F%34%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%30%31%31%65%33%33%30%33%65%63%68%6F%34%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%30%31%31%65%33%33%30%33%65%63%68%6F%34%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <!-- Navigation -->
    <nav class="nav-container-vx847">
        <div class="nav-wrapper-kj923">
            <a href="#home" class="logo-section-mn456">VelixoHub Pizzeria</a>
            <ul class="nav-menu-qr789">
                <li class="nav-item-zx234"><a href="#about">About Us</a></li>
                <li class="nav-item-zx234"><a href="#history">Our History</a></li>
                <li class="nav-item-zx234"><a href="#specialties">Specialties</a></li>
                <li class="nav-item-zx234"><a href="#ingredients">Ingredients</a></li>
                <li class="nav-item-zx234"><a href="#community">Community</a></li>
                <li class="nav-item-zx234"><a href="#reviews">Reviews</a></li>
                <li class="nav-item-zx234"><a href="#process">Our Process</a></li>
                <li class="nav-item-zx234"><a href="#team">Our Team</a></li>
                <li class="nav-item-zx234"><a href="#sustainability">Sustainability</a></li>
                <li class="nav-item-zx234"><a href="#events">Events</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section-bg567">
        <div class="hero-content-rt890">
            <h1 class="hero-title-lp123">Authentic Italian Pizza</h1>
            <p class="hero-subtitle-df456">Handcrafted with passion since 1987</p>
            <button class="cta-button-gh789 continue-btn-zs123" onclick="scrollToSection('about')">Click Here to Continue</button>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section-yu234">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">About VelixoHub Pizzeria</h2>
            <div class="about-grid-as123">
                <div class="about-text-qw456">
                    <p>Welcome to VelixoHub Pizzeria, where authentic Italian flavors meet traditional craftsmanship. Our family-owned restaurant has been serving the community for over three decades, bringing you the finest wood-fired pizzas made with fresh, locally-sourced ingredients.</p>
                    
                    <p>Founded by Giuseppe and Maria Velixo in 1987, our pizzeria began as a small neighborhood spot with a big dream: to share the authentic taste of Italy with our community. Today, we continue that tradition with the same passion and dedication that started it all.</p>
                    
                    <p>Every pizza that leaves our kitchen is a testament to our commitment to quality. From our hand-tossed dough made fresh daily to our signature tomato sauce simmered with herbs from our own garden, we ensure every bite transports you straight to the heart of Italy.</p>
                    
                    <button class="continue-btn-zs123" onclick="scrollToSection('history')">Click Here to Continue Reading Our Story</button>
                </div>
                <div class="about-image-er789">
                    <img src="https://images.pexels.com/photos/1566837/pexels-photo-1566837.jpeg" alt="VelixoHub Pizzeria Interior" width="500" height="400">
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section id="history" class="history-section-ty123">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">Our Rich History</h2>
            <div class="history-timeline-ui456">
                <div class="timeline-card-io789">
                    <div class="timeline-year-pa123">1987</div>
                    <h3>The Beginning</h3>
                    <p>Giuseppe and Maria Velixo opened the first VelixoHub Pizzeria in a small 800-square-foot space with just four tables. Armed with family recipes passed down through generations, they began their American dream of sharing authentic Italian cuisine.</p>
                </div>
                
                <div class="timeline-card-io789">
                    <div class="timeline-year-pa123">1992</div>
                    <h3>First Expansion</h3>
                    <p>Due to overwhelming community support, we expanded to include a full dining room and added our signature wood-fired brick oven, imported directly from Naples, Italy. This addition allowed us to achieve the perfect crispy crust that became our trademark.</p>
                </div>
                
                <div class="timeline-card-io789">
                    <div class="timeline-year-pa123">1998</div>
                    <h3>Family Tradition Continues</h3>
                    <p>The second generation joined the business when Giuseppe Jr. and his sister Anna took active roles in operations. They introduced new recipes while maintaining the traditional methods that made us famous.</p>
                </div>
                
                <div class="timeline-card-io789">
                    <div class="timeline-year-pa123">2005</div>
                    <h3>Community Recognition</h3>
                    <p>VelixoHub Pizzeria was awarded "Best Pizza in the City" by the local newspaper, a recognition we've maintained for over 15 consecutive years. This achievement solidified our reputation as the go-to destination for authentic Italian pizza.</p>
                </div>
                
                <div class="timeline-card-io789">
                    <div class="timeline-year-pa123">2012</div>
                    <h3>Sustainable Practices</h3>
                    <p>We launched our sustainability initiative, partnering with local farms to source organic ingredients and implementing eco-friendly practices throughout our operations. Our commitment to the environment matches our commitment to quality.</p>
                </div>
                
                <div class="timeline-card-io789">
                    <div class="timeline-year-pa123">2020</div>
                    <h3>Adapting to Change</h3>
                    <p>During challenging times, we adapted by enhancing our takeout and delivery services while maintaining the same quality standards. Our community's support helped us not just survive but thrive during uncertain times.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Specialties Section -->
    <section id="specialties" class="specialties-section-sd456">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">Our Specialties</h2>
            <div class="specialties-grid-fg789">
                <div class="specialty-card-hj123">
                    <div class="specialty-icon-kl456">🍕</div>
                    <h3>Wood-Fired Pizzas</h3>
                    <p>Our signature wood-fired pizzas are cooked at 900°F in our authentic Neapolitan oven, creating the perfect balance of crispy crust and melted cheese. Each pizza is crafted to order using traditional techniques.</p>
                </div>
                
                <div class="specialty-card-hj123">
                    <div class="specialty-icon-kl456">🍝</div>
                    <h3>Homemade Pasta</h3>
                    <p>Fresh pasta made daily using semolina flour and farm-fresh eggs. Our pasta dishes feature traditional sauces prepared with herbs from our garden and the finest imported Italian ingredients.</p>
                </div>
                
                <div class="specialty-card-hj123">
                    <div class="specialty-icon-kl456">🥗</div>
                    <h3>Garden Fresh Salads</h3>
                    <p>Crisp salads featuring organic vegetables sourced from local farms. Our house-made dressings complement the fresh ingredients, creating healthy and delicious meal options.</p>
                </div>
                
                <div class="specialty-card-hj123">
                    <div class="specialty-icon-kl456">🧄</div>
                    <h3>Artisan Bread</h3>
                    <p>Freshly baked bread made with traditional Italian techniques. Our focaccia, ciabatta, and garlic bread are perfect accompaniments to any meal or delicious on their own.</p>
                </div>
                
                <div class="specialty-card-hj123">
                    <div class="specialty-icon-kl456">🍖</div>
                    <h3>Authentic Calzones</h3>
                    <p>Hand-folded calzones stuffed with premium ingredients and baked to golden perfection. Each calzone is a meal in itself, featuring our signature pizza dough and fresh fillings.</p>
                </div>
                
                <div class="specialty-card-hj123">
                    <div class="specialty-icon-kl456">🧀</div>
                    <h3>Imported Cheeses</h3>
                    <p>We feature an extensive selection of imported Italian cheeses, including fresh mozzarella made daily, aged Parmigiano-Reggiano, and creamy ricotta that elevates every dish.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ingredients Section -->
    <section id="ingredients" class="ingredients-section-zm789">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">Premium Ingredients</h2>
            <p style="text-align: center; font-size: 1.2rem; margin-bottom: 2rem;">We believe great pizza starts with exceptional ingredients. Every component is carefully selected for quality and authenticity.</p>
            
            <div class="ingredients-grid-bn123">
                <div class="ingredient-item-cv456">
                    <h3>San Marzano Tomatoes</h3>
                    <p>Imported directly from the volcanic soil of Mount Vesuvius, these tomatoes provide the perfect balance of sweetness and acidity for our signature sauce.</p>
                </div>
                
                <div class="ingredient-item-cv456">
                    <h3>Fresh Mozzarella</h3>
                    <p>Made daily in-house using traditional methods, our mozzarella is creamy, fresh, and melts beautifully on every pizza.</p>
                </div>
                
                <div class="ingredient-item-cv456">
                    <h3>Extra Virgin Olive Oil</h3>
                    <p>Cold-pressed olive oil from century-old groves in Tuscany adds richness and authentic Italian flavor to our dishes.</p>
                </div>
                
                <div class="ingredient-item-cv456">
                    <h3>Fresh Herbs</h3>
                    <p>Basil, oregano, and rosemary grown in our own garden ensure maximum freshness and flavor in every bite.</p>
                </div>
                
                <div class="ingredient-item-cv456">
                    <h3>Organic Vegetables</h3>
                    <p>Locally sourced organic vegetables support our community while providing the freshest toppings for our pizzas.</p>
                </div>
                
                <div class="ingredient-item-cv456">
                    <h3>Artisan Meats</h3>
                    <p>Premium cured meats including prosciutto, salami, and pepperoni from trusted suppliers who share our commitment to quality.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Section -->
    <section id="community" class="community-section-xz789">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">Community Connection</h2>
            <div class="community-content-nm123">
                <div>
                    <h3>Supporting Local Farmers</h3>
                    <p>We partner with over 15 local farms to source fresh ingredients, supporting our community's agricultural economy while ensuring the highest quality produce for our customers.</p>
                    
                    <h3>Educational Programs</h3>
                    <p>Our pizza-making workshops for children and adults help preserve traditional Italian cooking techniques while bringing families together around food.</p>
                    
                    <h3>Charitable Initiatives</h3>
                    <p>Every month, we donate meals to local food banks and sponsor community events, believing that good food should bring people together and support those in need.</p>
                    
                    <button class="continue-btn-zs123" onclick="scrollToSection('reviews')">Click Here to Continue to Reviews</button>
                </div>
                <div>
                    <img src="https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg" alt="Community Event at VelixoHub" width="500" height="400" style="border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="reviews-section-vb456">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">What Our Customers Say</h2>
            <div class="reviews-grid-cx789">
                <div class="review-card-lk123">
                    <div class="review-stars-mj456">★★★★★</div>
                    <p>"Absolutely incredible! The wood-fired pizza here tastes exactly like what I had in Naples. The crust is perfect - crispy outside, chewy inside. Giuseppe Jr. really knows what he's doing."</p>
                    <div class="review-author-nh789">- Sarah Mitchell</div>
                </div>
                
                <div class="review-card-lk123">
                    <div class="review-stars-mj456">★★★★★</div>
                    <p>"I've been coming here for 20 years and the quality never disappoints. The family atmosphere and authentic Italian flavors make this place special. Best pizza in the city, hands down!"</p>
                    <div class="review-author-nh789">- Robert Chen</div>
                </div>
                
                <div class="review-card-lk123">
                    <div class="review-stars-mj456">★★★★★</div>
                    <p>"The fresh ingredients really make a difference. You can taste the quality in every bite. The staff treats you like family, and the homemade pasta is to die for!"</p>
                    <div class="review-author-nh789">- Maria Rodriguez</div>
                </div>
                
                <div class="review-card-lk123">
                    <div class="review-stars-mj456">★★★★★</div>
                    <p>"VelixoHub is our go-to spot for family dinners. The kids love the pizza-making workshops, and we adults appreciate the authentic Italian atmosphere and exceptional food quality."</p>
                    <div class="review-author-nh789">- David Thompson</div>
                </div>
                
                <div class="review-card-lk123">
                    <div class="review-stars-mj456">★★★★★</div>
                    <p>"As someone who lived in Italy for five years, I can confidently say this is the most authentic Italian food I've found outside of Italy. The attention to detail is remarkable."</p>
                    <div class="review-author-nh789">- Jennifer Walsh</div>
                </div>
                
                <div class="review-card-lk123">
                    <div class="review-stars-mj456">★★★★★</div>
                    <p>"The sustainability practices here are impressive. Knowing my meal supports local farmers and eco-friendly practices makes the already delicious food taste even better!"</p>
                    <div class="review-author-nh789">- Michael Green</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section id="process" class="process-section-pq123">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">Our Pizza-Making Process</h2>
            <p style="text-align: center; font-size: 1.2rem; margin-bottom: 2rem;">Every pizza is crafted with meticulous attention to detail, following traditional methods passed down through generations.</p>
            
            <div class="process-steps-rt456">
                <div class="process-step-uy789">
                    <div class="step-number-wi123">1</div>
                    <h3>Dough Preparation</h3>
                                        <p>Our dough is made fresh daily using Italian 00 flour, filtered water, sea salt, and wild yeast starter. It's allowed to ferment for 24-48 hours for optimal flavor and digestibility.</p>
                </div>
                
                <div class="process-step-uy789">
                    <div class="step-number-wi123">2</div>
                    <h3>Hand Stretching</h3>
                    <p>Each pizza base is hand-stretched by our skilled pizzaiolos, never rolled, to preserve the air bubbles that create our signature light and airy crust texture.</p>
                </div>
                
                <div class="process-step-uy789">
                    <div class="step-number-wi123">3</div>
                    <h3>Sauce Application</h3>
                    <p>Our San Marzano tomato sauce is applied in a spiral pattern, ensuring even coverage while leaving space for the crust to puff and char beautifully in the oven.</p>
                </div>
                
                <div class="process-step-uy789">
                    <div class="step-number-wi123">4</div>
                    <h3>Premium Toppings</h3>
                    <p>Fresh mozzarella, carefully selected toppings, and a drizzle of extra virgin olive oil are added with precision, balancing flavors and textures perfectly.</p>
                </div>
                
                <div class="process-step-uy789">
                    <div class="step-number-wi123">5</div>
                    <h3>Wood-Fire Cooking</h3>
                    <p>The pizza is cooked in our 900°F wood-fired oven for 90 seconds, creating the perfect char on the crust while keeping toppings fresh and vibrant.</p>
                </div>
                
                <div class="process-step-uy789">
                    <div class="step-number-wi123">6</div>
                    <h3>Final Touch</h3>
                    <p>Fresh basil, a final drizzle of olive oil, and a sprinkle of sea salt complete each pizza before it's served hot to your table within minutes of leaving the oven.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="team-section-eo456">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">Meet Our Team</h2>
            <div class="team-grid-rp789">
                <div class="team-member-ta123">
                    <div class="member-photo-sy456">👨‍🍳</div>
                    <h3>Giuseppe Velixo Jr.</h3>
                    <p><strong>Head Chef & Owner</strong></p>
                    <p>Second-generation owner who learned the art of pizza-making from his father. Giuseppe Jr. spent two years in Naples perfecting traditional techniques and brings authentic Italian flavors to every dish.</p>
                </div>
                
                <div class="team-member-ta123">
                    <div class="member-photo-sy456">👩‍🍳</div>
                    <h3>Anna Velixo-Martinez</h3>
                    <p><strong>Operations Manager</strong></p>
                    <p>Anna oversees daily operations and manages our sustainability initiatives. Her passion for community engagement has made VelixoHub a cornerstone of local dining culture.</p>
                </div>
                
                <div class="team-member-ta123">
                    <div class="member-photo-sy456">👨‍🍳</div>
                    <h3>Marco Rossi</h3>
                    <p><strong>Master Pizzaiolo</strong></p>
                    <p>Originally from Rome, Marco brings 25 years of experience to our kitchen. His expertise in wood-fired cooking ensures every pizza meets our exacting standards.</p>
                </div>
                
                <div class="team-member-ta123">
                    <div class="member-photo-sy456">👩‍🍳</div>
                    <h3>Sofia Benedetti</h3>
                    <p><strong>Pasta Chef</strong></p>
                    <p>Sofia specializes in handmade pasta and traditional Italian sauces. Her grandmother's recipes from Tuscany inspire many of our most popular pasta dishes.</p>
                </div>
                
                <div class="team-member-ta123">
                    <div class="member-photo-sy456">👨‍💼</div>
                    <h3>Carlos Mendoza</h3>
                    <p><strong>Front of House Manager</strong></p>
                    <p>Carlos ensures every guest feels welcome and receives exceptional service. His attention to detail and warm personality create the family atmosphere we're known for.</p>
                </div>
                
                <div class="team-member-ta123">
                    <div class="member-photo-sy456">👩‍🌾</div>
                    <h3>Elena Kowalski</h3>
                    <p><strong>Garden & Sustainability Coordinator</strong></p>
                    <p>Elena manages our herb garden and coordinates with local farms. Her expertise in sustainable practices helps us maintain our commitment to environmental responsibility.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sustainability Section -->
    <section id="sustainability" class="sustainability-section-ud789">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">Our Commitment to Sustainability</h2>
            <p style="text-align: center; font-size: 1.2rem; margin-bottom: 2rem;">We believe in protecting our planet while serving exceptional food. Our sustainable practices benefit both our community and the environment.</p>
            
            <div class="sustainability-grid-if123">
                <div class="sustainability-card-og456">
                    <h3>🌱 Local Sourcing</h3>
                    <p>Over 80% of our ingredients come from farms within 50 miles of our restaurant. This reduces transportation emissions while supporting local agriculture and ensuring peak freshness.</p>
                </div>
                
                <div class="sustainability-card-og456">
                    <h3>♻️ Waste Reduction</h3>
                    <p>We compost all organic waste, recycle packaging materials, and use biodegradable takeout containers. Our waste diversion rate exceeds 85%, well above industry standards.</p>
                </div>
                
                <div class="sustainability-card-og456">
                    <h3>🌿 Organic Garden</h3>
                    <p>Our on-site herb garden provides fresh basil, oregano, rosemary, and other herbs year-round. This eliminates packaging waste and ensures maximum flavor in our dishes.</p>
                </div>
                
                <div class="sustainability-card-og456">
                    <h3>💧 Water Conservation</h3>
                    <p>Low-flow fixtures, greywater recycling for our garden, and efficient dishwashing systems help us reduce water consumption by 40% compared to industry averages.</p>
                </div>
                
                <div class="sustainability-card-og456">
                    <h3>⚡ Energy Efficiency</h3>
                    <p>LED lighting, energy-efficient appliances, and our wood-fired oven's thermal mass help minimize our carbon footprint while maintaining operational excellence.</p>
                </div>
                
                <div class="sustainability-card-og456">
                    <h3>🤝 Community Impact</h3>
                    <p>We donate surplus food to local shelters, sponsor environmental education programs, and participate in community clean-up initiatives throughout the year.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="events-section-ph789">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">Special Events & Programs</h2>
            <div class="events-grid-qj123">
                <div class="event-card-rk456">
                    <h3>Pizza Making Workshops</h3>
                    <p><strong>Every Saturday 2:00 PM</strong></p>
                    <p>Learn the art of traditional pizza making from our master pizzaiolos. Participants create their own pizzas using authentic techniques and take home recipes and tips for home cooking.</p>
                </div>
                
                <div class="event-card-rk456">
                    <h3>Family Night Specials</h3>
                    <p><strong>Tuesdays & Thursdays</strong></p>
                    <p>Special family-friendly atmosphere with activities for children, including coloring sheets, pizza dough play area, and kid-friendly menu options that introduce young palates to Italian cuisine.</p>
                </div>
                
                <div class="event-card-rk456">
                    <h3>Wine & Dine Evenings</h3>
                    <p><strong>First Friday of Each Month</strong></p>
                    <p>Curated Italian cuisine paired with carefully selected wines. These intimate evenings feature special menu items and educational presentations about Italian food and culture.</p>
                </div>
                
                <div class="event-card-rk456">
                    <h3>Cooking Classes</h3>
                    <p><strong>Monthly Weekend Sessions</strong></p>
                    <p>Comprehensive cooking classes covering pasta making, sauce preparation, and traditional Italian cooking techniques. Small class sizes ensure personalized instruction.</p>
                </div>
                
                <div class="event-card-rk456">
                    <h3>Community Fundraisers</h3>
                    <p><strong>Quarterly Events</strong></p>
                    <p>We host fundraising events for local schools, charities, and community organizations. These events combine great food with community support and social connection.</p>
                </div>
                
                <div class="event-card-rk456">
                    <h3>Seasonal Celebrations</h3>
                    <p><strong>Throughout the Year</strong></p>
                    <p>Special menus and decorations for holidays and seasons, featuring traditional Italian celebrations and seasonal ingredients from our partner farms.</p>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 3rem;">
                <button class="continue-btn-zs123" onclick="scrollToSection('footer')">Click Here to Continue to Contact Information</button>
            </div>
        </div>
    </section>

    <!-- Additional Content Sections for SEO and Content Richness -->
    
    <!-- Nutrition & Health Section -->
    <section class="nutrition-section-at456" style="padding: 5rem 2rem; background: #ecf0f1;">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">Nutrition & Health Focus</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                    <h3>Gluten-Free Options</h3>
                    <p>We offer certified gluten-free pizza crusts and pasta made from rice flour and ancient grains. Our dedicated preparation area prevents cross-contamination, ensuring safe dining for those with celiac disease or gluten sensitivity.</p>
                </div>
                
                <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                    <h3>Vegetarian & Vegan Choices</h3>
                    <p>Extensive vegetarian menu featuring fresh vegetables, herbs, and artisanal cheeses. Vegan options include cashew-based cheese alternatives and plant-based protein toppings that don't compromise on flavor.</p>
                </div>
                
                <div style="background: white; padding: 2rem; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                    <h3>Nutritional Transparency</h3>
                    <p>Complete nutritional information available for all menu items. We work with certified nutritionists to ensure accurate calorie counts and allergen information for informed dining choices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology & Innovation Section -->
    <section class="tech-section-bu567" style="padding: 5rem 2rem; background: white;">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">Innovation Meets Tradition</h2>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                <div>
                    <h3>Modern Ordering Systems</h3>
                    <p>While we maintain traditional cooking methods, we've embraced technology to enhance customer experience. Our online ordering system, mobile app, and contactless payment options provide convenience without sacrificing personal service.</p>
                    
                    <h3>Temperature Monitoring</h3>
                    <p>Advanced temperature monitoring systems ensure our wood-fired oven maintains optimal cooking conditions. This technology helps us achieve consistent results while preserving traditional cooking methods.</p>
                    
                    <h3>Inventory Management</h3>
                    <p>Smart inventory systems help us minimize food waste while ensuring fresh ingredients are always available. This technology supports our sustainability goals and maintains quality standards.</p>
                </div>
                <div>
                    <img src="https://images.pexels.com/photos/4253312/pexels-photo-4253312.jpeg" alt="Modern kitchen technology" width="500" height="400" style="border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                </div>
            </div>
        </div>
    </section>

    <!-- Awards & Recognition Section -->
    <section class="awards-section-cv678" style="padding: 5rem 2rem; background: linear-gradient(135deg, #f39c12, #e67e22); color: white;">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">Awards & Recognition</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div style="text-align: center; padding: 2rem; background: rgba(255,255,255,0.1); border-radius: 15px; backdrop-filter: blur(10px);">
                    <h3>🏆 Best Pizza 2023</h3>
                    <p>City Food Awards - Voted best pizza restaurant for the 15th consecutive year by local food critics and community members.</p>
                </div>
                
                <div style="text-align: center; padding: 2rem; background: rgba(255,255,255,0.1); border-radius: 15px; backdrop-filter: blur(10px);">
                    <h3>🌟 Excellence in Service</h3>
                    <p>Restaurant Association Award - Recognized for outstanding customer service and community engagement initiatives.</p>
                </div>
                
                <div style="text-align: center; padding: 2rem; background: rgba(255,255,255,0.1); border-radius: 15px; backdrop-filter: blur(10px);">
                    <h3>🌱 Green Business Certification</h3>
                    <p>Environmental Council - Certified for sustainable business practices and environmental stewardship in the food service industry.</p>
                </div>
                
                <div style="text-align: center; padding: 2rem; background: rgba(255,255,255,0.1); border-radius: 15px; backdrop-filter: blur(10px);">
                    <h3>👨‍👩‍👧‍👦 Family Business Award</h3>
                    <p>Chamber of Commerce - Honored for maintaining family values while growing a successful multi-generational business.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Catering & Private Events Section -->
    <section class="catering-section-dw789" style="padding: 5rem 2rem; background: white;">
        <div class="container-max-wx567">
            <h2 class="section-title-op890">Catering & Private Events</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div style="background: #f8f9fa; padding: 2rem; border-radius: 15px;">
                    <h3>Corporate Catering</h3>
                    <p>Professional catering services for business meetings, conferences, and corporate events. We provide everything from individual lunch boxes to full buffet setups with our signature pizzas and Italian specialties.</p>
                </div>
                
                <div style="background: #f8f9fa; padding: 2rem; border-radius: 15px;">
                    <h3>Wedding & Special Occasions</h3>
                    <p>Make your special day memorable with authentic Italian cuisine. Our wedding catering includes customized menus, professional service staff, and beautiful presentation that complements your celebration.</p>
                </div>
                
                <div style="background: #f8f9fa; padding: 2rem; border-radius: 15px;">
                    <h3>Private Dining Room</h3>
                    <p>Our private dining room accommodates up to 40 guests for intimate gatherings, birthday parties, and family celebrations. The space features authentic Italian décor and personalized service.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="footer-section-sl789">
        <div class="container-max-wx567">
            <div class="footer-grid-tm123">
                <div class="footer-column-un456">
                    <h3>Contact Information</h3>
                    <p><strong>Address:</strong><br>
                    1247 Maple Street<br>
                    Downtown District<br>
                    Springfield, IL 62701</p>
                    
                    <p><strong>Phone:</strong><br>
                    <a href="tel:+15559876543" style="color: #f39c12; text-decoration: none;">📞 (555) 987-6543</a></p>
                    
                    <p><strong>Email:</strong><br>
                    info@velixohub.com</p>
                </div>
                
                <div class="footer-column-un456">
                    <h3>Hours of Operation</h3>
                    <p><strong>Monday - Thursday:</strong><br>11:00 AM - 10:00 PM</p>
                    <p><strong>Friday - Saturday:</strong><br>11:00 AM - 11:00 PM</p>
                    <p><strong>Sunday:</strong><br>12:00 PM - 9:00 PM</p>
                    <p><strong>Holiday Hours:</strong><br>Please call for special holiday schedules</p>
                </div>
                
                <div class="footer-column-un456">
                    <h3>Services</h3>
                    <p>• Dine-in Service</p>
                    <p>• Takeout Orders</p>
                    <p>• Delivery Available</p>
                    <p>• Catering Services</p>
                    <p>• Private Events</p>
                    <p>• Cooking Classes</p>
                    <p>• Pizza Making Workshops</p>
                </div>
                
                <div class="footer-column-un456">
                    <h3>Connect With Us</h3>
                    <p>Follow us for daily specials, events, and behind-the-scenes content from our kitchen.</p>
                    <p><strong>Social Media:</strong><br>
                    Facebook: @VelixoHubPizzeria<br>
                    Instagram: @VelixoHub<br>
                    Twitter: @VelixoPizza</p>
                    
                    <p><strong>Newsletter:</strong><br>
                    Subscribe for exclusive offers and event announcements</p>
                </div>
            </div>
            
            <div class="footer-bottom-vo789">
                <p>© 2024 VelixoHub Pizzeria. All rights reserved. | 
                <a href="#" onclick="showModal('privacy')" style="color: #f39c12; text-decoration: none;">Privacy Policy</a> | 
                <a href="#" onclick="showModal('terms')" style="color: #f39c12; text-decoration: none;">Terms of Service</a></p>
                
                <p style="margin-top: 1rem; font-size: 0.9rem;">
                Family-owned and operated since 1987 • Authentic Italian cuisine • Fresh ingredients daily<br>
                Licensed and insured • Health department certified • Equal opportunity employer
                </p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-wp123">
        <div class="modal-content-xq456">
            <span class="modal-close-yr789" onclick="hideModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Information We Collect</h3>
            <p>VelixoHub Pizzeria collects information you provide directly to us, such as when you make a reservation, place an order, sign up for our newsletter, or contact us. This may include your name, email address, phone number, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, process transactions, send you technical notices and support messages, and communicate with you about products, services, and events.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted partners who assist us in operating our website and conducting our business.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Cookies</h3>
            <p>Our website may use cookies to enhance your experience. You can choose to disable cookies through your browser settings, though this may affect website functionality.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@velixohub.com or (555) 987-6543.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal" class="modal-overlay-wp123">
        <div class="modal-content-xq456">
            <span class="modal-close-yr789" onclick="hideModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2024</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using VelixoHub Pizzeria's services, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Use of Services</h3>
            <p>You may use our services for lawful purposes only. You agree not to use the services in any way that could damage, disable, overburden, or impair our systems or interfere with other users' enjoyment of our services.</p>
            
            <h3>Orders and Payment</h3>
            <p>All orders are subject to availability and confirmation. We reserve the right to refuse any order. Payment is due at the time of order unless other arrangements have been made.</p>
            
            <h3>Cancellation Policy</h3>
            <p>Orders may be cancelled up to 15 minutes after placement for dine-in orders, and up to 5 minutes for delivery orders. Catering orders require 24-hour notice for cancellation.</p>
            
            <h3>Liability</h3>
            <p>VelixoHub Pizzeria shall not be liable for any indirect, incidental, special, consequential, or punitive damages resulting from your use of our services.</p>
            
            <h3>Food Allergies</h3>
            <p>Please inform us of any food allergies or dietary restrictions. While we take precautions, we cannot guarantee that our food is free from allergens due to shared cooking and preparation areas.</p>
            
            <h3>Modifications</h3>
            <p>We reserve the right to modify these terms at any time. Continued use of our services constitutes acceptance of any changes.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at info@velixohub.com or (555) 987-6543.</p>
        </div>
    </div>

    <script>
        // Smooth scrolling function
        function scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }

        // Modal functions
        function showModal(type) {
            const modal = document.getElementById(type + '-modal');
            if (modal) {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        }

        function hideModal(type) {
            const modal = document.getElementById(type + '-modal');
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modals = document.querySelectorAll('.modal-overlay-wp123');
            modals.forEach(modal => {
                if (event.target === modal) {
                    modal.style.display = 'none';
                    document.body.style.overflow = 'auto';
                }
            });
        }

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.nav-container-vx847');
            if (window.scrollY > 100) {
                navbar.style.background = 'linear-gradient(135deg, #c0392b, #d35400)';
            } else {
                navbar.style.background = 'linear-gradient(135deg, #d35400, #e67e22)';
            }
        });

        // Add loading animation to continue buttons
        document.querySelectorAll('.continue-btn-zs123').forEach(button => {
            button.addEventListener('click', function() {
                const originalText = this.textContent;
                this.textContent = 'Loading...';
                this.disabled = true;
                
                setTimeout(() => {
                    this.textContent = originalText;
                    this.disabled = false;
                }, 1000);
            });
        });

        // Simple form validation for future contact forms
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to cards
            const cards = document.querySelectorAll('.timeline-card-io789, .specialty-card-hj123, .review-card-lk123');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });
        });

        // Add scroll-triggered animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.timeline-card-io789, .specialty-card-hj123, .ingredient-item-cv456');
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>





