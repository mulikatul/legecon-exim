@extends('frontend.layouts.app')
@section('title') Home Page @endsection
@section('description') Home Page @endsection
@section('main-content')
<!-- ═══════════════════════════════
     PAGE: HOME
═══════════════════════════════ -->
<div id="page-home" class="page pt active">

    <!-- Hero -->
    <section class="hero">
        <div class="hero-grid"></div>
        <div class="container">
            <div class="hero-inner">
                <div>
                    <div class="hero-badge"><span></span>ISO 9001:2015 Certified · Pune, India</div>
                    <h1>
                        Empowering Industry with<br>
                        <span class="accent">Smart Automation</span>
                    </h1>
                    <p class="hero-sub">
                        End-to-end industrial automation — EPC projects, IoT, SCADA, control panels, and turnkey engineering solutions. Delivered from Pune, India to clients worldwide.
                    </p>
                    <div class="hero-btns">
                        <button class="btn-white" onclick="goto('products')">Explore Products →</button>
                        <button class="btn-ghost-white" onclick="goto('contact')">Request a Quote</button>
                    </div>
                </div>
                <div>
                    <div class="hero-card">
                        <div class="hero-card-title">At a Glance</div>
                        <div class="hero-stats-grid">
                            <div class="hero-stat">
                                <div class="hero-stat-num">6<sup>+</sup></div>
                                <div class="hero-stat-label">Industries Served</div>
                            </div>
                            <div class="hero-stat">
                                <div class="hero-stat-num">7</div>
                                <div class="hero-stat-label">Product Lines</div>
                            </div>
                            <div class="hero-stat">
                                <div class="hero-stat-num">3</div>
                                <div class="hero-stat-label">Global Partners</div>
                            </div>
                            <div class="hero-stat">
                                <div class="hero-stat-num">24<sup>/7</sup></div>
                                <div class="hero-stat-label">Safe Operations</div>
                            </div>
                        </div>
                        <div class="hero-tags">
                            <span class="hero-tag">EPC Projects</span>
                            <span class="hero-tag">Industrial IoT</span>
                            <span class="hero-tag">SCADA</span>
                            <span class="hero-tag">PLC</span>
                            <span class="hero-tag">Control Panels</span>
                            <span class="hero-tag">Turnkey</span>
                        </div>
                        <div class="hero-iso">
                            <div class="hero-iso-badge">ISO</div>
                            <span>9001:2015 Certified Quality Management</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services quick nav -->
    <div class="services-bar">
        <div class="services-bar-inner">
            <div class="sbar-item" onclick="goto('products')"><span class="sbar-icon">📡</span><span class="sbar-name">Industrial IoT 4.0</span></div>
            <div class="sbar-item" onclick="goto('products')"><span class="sbar-icon">⚡</span><span class="sbar-name">VFD Control Panels</span></div>
            <div class="sbar-item" onclick="goto('products')"><span class="sbar-icon">🤖</span><span class="sbar-name">PLC Control Panels</span></div>
            <div class="sbar-item" onclick="goto('products')"><span class="sbar-icon">🏗️</span><span class="sbar-name">MCC Panels</span></div>
            <div class="sbar-item" onclick="goto('products')"><span class="sbar-icon">📊</span><span class="sbar-name">APFC Panels</span></div>
            <div class="sbar-item" onclick="goto('products')"><span class="sbar-icon">🗄️</span><span class="sbar-name">PCC Panels</span></div>
            <div class="sbar-item" onclick="goto('products')"><span class="sbar-icon">🔄</span><span class="sbar-name">Sync Panels</span></div>
        </div>
    </div>

    <!-- Why choose us -->
    <section class="section bg-white">
        <div class="container">
            <div class="eyebrow rv">Why Legecon</div>
            <h2 class="headline-lg rv d1" style="margin-bottom:12px">Your Single-Point<br>Automation Partner</h2>
            <p class="subtext rv d2" style="max-width:520px;margin-bottom:48px">From concept to commissioning, we manage every step so you don't have to worry about coordination, quality, or timelines.</p>
            <div class="why-grid">
                <div class="why-card rv">
                    <div class="icon-box">🔧</div>
                    <h4>Single-Point Solution</h4>
                    <p>One partner handles everything — design, supply, panel manufacturing, programming, commissioning, and support.</p>
                </div>
                <div class="why-card rv d1">
                    <div class="icon-box">⚙️</div>
                    <h4>Engineering Excellence</h4>
                    <p>Custom-engineered designs built around your exact operational requirements, focused on efficiency and cost-effectiveness.</p>
                </div>
                <div class="why-card rv d2">
                    <div class="icon-box">🌐</div>
                    <h4>Global Reach</h4>
                    <p>We serve industries worldwide from our engineering base in Pune — with the agility of a local partner and the capability of a global firm.</p>
                </div>
                <div class="why-card rv d3">
                    <div class="icon-box">🛡️</div>
                    <h4>Reliable Support</h4>
                    <p>Strong technical backing, on-time delivery, and long-term after-sales service you can count on for years after handover.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products preview -->
    <section class="section bg-gray">
        <div class="container">
            <div style="display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:36px;flex-wrap:wrap;gap:16px">
                <div>
                    <div class="eyebrow rv">Products</div>
                    <h2 class="headline-lg rv d1">Our Product Range</h2>
                </div>
                <button class="btn btn-outline rv" onclick="goto('products')">View All Products →</button>
            </div>
            <div class="products-grid-home">
                <div class="prod-mini rv" onclick="goto('products')">
                    <div class="pm-icon">📡</div>
                    <h4>Industrial IoT 4.0</h4>
                    <p>Smart connected systems for real-time monitoring and control.</p>
                </div>
                <div class="prod-mini rv d1" onclick="goto('products')">
                    <div class="pm-icon">⚡</div>
                    <h4>VFD Control Panels</h4>
                    <p>Precision motor speed control with energy savings.</p>
                </div>
                <div class="prod-mini rv d2" onclick="goto('products')">
                    <div class="pm-icon">🤖</div>
                    <h4>PLC Control Panels</h4>
                    <p>Advanced logic control for any automation application.</p>
                </div>
                <div class="prod-mini rv d3" onclick="goto('products')">
                    <div class="pm-icon">🏗️</div>
                    <h4>MCC Panels</h4>
                    <p>Centralized motor control for large installations.</p>
                </div>
                <div class="prod-mini rv d1" onclick="goto('products')">
                    <div class="pm-icon">📊</div>
                    <h4>APFC Panels</h4>
                    <p>Automatic power factor correction for energy savings.</p>
                </div>
                <div class="prod-mini rv d2" onclick="goto('products')">
                    <div class="pm-icon">🔄</div>
                    <h4>Sync Panels</h4>
                    <p>Generator and grid synchronization for power continuity.</p>
                </div>
                <div class="prod-mini rv d3" onclick="goto('products')">
                    <div class="pm-icon">🗄️</div>
                    <h4>PCC Panels</h4>
                    <p>High-reliability power control and distribution centers.</p>
                </div>
                <div class="prod-mini rv d4" onclick="goto('contact')" style="background:var(--navy);border-color:var(--navy)">
                    <div class="pm-icon" style="background:rgba(255,255,255,0.1)">💬</div>
                    <h4 style="color:#fff">Need Something Custom?</h4>
                    <p style="color:rgba(255,255,255,0.6)">Tell us your requirements — we design to spec.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Industries -->
    <section class="section bg-white">
        <div class="container">
            <div style="display:flex;align-items:flex-end;justify-content:space-between;margin-bottom:36px;flex-wrap:wrap;gap:16px">
                <div>
                    <div class="eyebrow rv">Sectors</div>
                    <h2 class="headline-lg rv d1">Industries We Serve</h2>
                </div>
                <button class="btn btn-outline rv" onclick="goto('industries')">All Industries →</button>
            </div>
            <div class="industries-row">
                <div class="ind-mini rv"><span class="ind-mini-icon">💧</span>
                    <div>
                        <h4>Water & Wastewater</h4>
                        <p>Treatment, pumping, and distribution control systems.</p>
                    </div>
                </div>
                <div class="ind-mini rv d1"><span class="ind-mini-icon">🍔</span>
                    <div>
                        <h4>Food & Beverage</h4>
                        <p>Hygienic automation for processing and packaging.</p>
                    </div>
                </div>
                <div class="ind-mini rv d2"><span class="ind-mini-icon">🛢️</span>
                    <div>
                        <h4>Oil & Gas / Energy</h4>
                        <p>Robust control for upstream to downstream operations.</p>
                    </div>
                </div>
                <div class="ind-mini rv d1"><span class="ind-mini-icon">🌡️</span>
                    <div>
                        <h4>HVAC & Smart Buildings</h4>
                        <p>Intelligent building automation and energy management.</p>
                    </div>
                </div>
                <div class="ind-mini rv d2"><span class="ind-mini-icon">🌿</span>
                    <div>
                        <h4>Sugar & Agriculture</h4>
                        <p>Solar pumping and process automation for agriculture.</p>
                    </div>
                </div>
                <div class="ind-mini rv d3"><span class="ind-mini-icon">🧪</span>
                    <div>
                        <h4>Pharmaceutical</h4>
                        <p>GMP-compliant process control for pharma plants.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <div class="partners-strip">
        <div class="container">
            <div class="partners-inner">
                <span class="partners-label">Technology Partners</span>
                <div class="partners-logos">
                    <div class="partner-logo">
                        <div class="pl-name">RealiteQ</div>
                        <div class="pl-country">🇮🇱 Israel</div>
                    </div>
                    <div class="partner-logo">
                        <div class="pl-name">Emotron</div>
                        <div class="pl-country">🇸🇪 Sweden</div>
                    </div>
                    <div class="partner-logo">
                        <div class="pl-name">Selec</div>
                        <div class="pl-country">🇮🇳 India</div>
                    </div>
                </div>
                <button class="btn btn-outline" onclick="goto('about')">Learn More</button>
            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="cta-band">
        <div class="container">
            <div class="cta-band-inner">
                <h2>Ready to automate your<br><span>next project?</span></h2>
                <div class="cta-band-btns">
                    <button class="btn" style="background:#fff;color:var(--navy);font-weight:700" onclick="goto('contact')">Get a Free Quote →</button>
                    <button class="btn btn-ghost-white" onclick="goto('services')">View Services</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <div class="footer-brand-logo">
                        <div class="footer-brand-icon">L</div>
                        <div class="footer-brand-name">Lege<span>con</span> Exim Pvt. Ltd.</div>
                    </div>
                    <p class="footer-tagline">Empowering industries with smart automation. EPC Projects · IoT · SCADA · Control Panels · Turnkey Automation. Serving worldwide from Pune, India.</p>
                </div>
                <div class="footer-col">
                    <h5>Products</h5>
                    <ul>
                        <li><a onclick="goto('products')">IoT Solutions</a></li>
                        <li><a onclick="goto('products')">VFD Panels</a></li>
                        <li><a onclick="goto('products')">PLC Panels</a></li>
                        <li><a onclick="goto('products')">MCC Panels</a></li>
                        <li><a onclick="goto('products')">APFC Panels</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Services</h5>
                    <ul>
                        <li><a onclick="goto('services')">PLC Programming</a></li>
                        <li><a onclick="goto('services')">SCADA Systems</a></li>
                        <li><a onclick="goto('services')">HMI Design</a></li>
                        <li><a onclick="goto('services')">Commissioning</a></li>
                        <li><a onclick="goto('services')">Retrofitting</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Company</h5>
                    <ul>
                        <li><a onclick="goto('about')">About Us</a></li>
                        <li><a onclick="goto('industries')">Industries</a></li>
                        <li><a onclick="goto('contact')">Contact</a></li>
                        <li><a href="https://www.legecon.com" target="_blank">Website</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 <strong>Legecon Exim Pvt. Ltd.</strong> All rights reserved. Pune, Maharashtra, India.</p>
                <p>Industrial Strength · Precision Control · Unmatched Reliability</p>
            </div>
        </div>
    </footer>
</div>

<!-- ═══════════════════════════════
     PAGE: ABOUT
═══════════════════════════════ -->
<div id="page-about" class="page pt">
    <div class="page-header">
        <div class="container">
            <div class="eyebrow rv">Who We Are</div>
            <h1 class="headline-xl rv d1" style="margin-top:10px">About Legecon</h1>
            <p class="subtext rv d2" style="max-width:580px;margin-top:14px">A trusted engineering partner delivering industrial automation solutions from Pune, India to clients worldwide.</p>
        </div>
    </div>

    <section class="section bg-white">
        <div class="container">
            <div class="about-layout">
                <div class="rv">
                    <p style="font-size:17px;line-height:1.8;color:var(--gray-700);margin-bottom:20px">
                        Legecon Exim Pvt. Ltd. specializes in <strong style="color:var(--navy)">high-performance industrial automation</strong>, electrical control systems, and energy-efficient solutions. We deliver reliable, customized systems engineered to meet the specific demands of industries, OEMs, and infrastructure projects.
                    </p>
                    <p class="subtext-sm" style="margin-bottom:20px">
                        With deep technical expertise and hands-on site experience, we provide end-to-end support — from system design and panel manufacturing to PLC/SCADA development and long-term after-sales service.
                    </p>
                    <p class="subtext-sm">
                        Our goal is simple: maximize your plant's productivity, optimize energy usage, and ensure 24/7 safe operations through advanced technology.
                    </p>
                    <div class="mission-card">
                        <blockquote>"To deliver high-quality automation products and innovative engineering solutions that build long-term value and trust with our customers."</blockquote>
                        <cite>— Core Mission, Legecon Exim Pvt. Ltd.</cite>
                    </div>
                </div>
                <div>
                    <div class="eyebrow rv">Why Partner With Us</div>
                    <div class="why-list" style="margin-top:20px">
                        <div class="why-row rv d1">
                            <span class="wr-icon">🔧</span>
                            <div class="wr-body">
                                <h4>Single-Point Solution</h4>
                                <p>We handle everything from design to commissioning — one partner, complete accountability, zero coordination headaches.</p>
                            </div>
                        </div>
                        <div class="why-row rv d2">
                            <span class="wr-icon">⚙️</span>
                            <div class="wr-body">
                                <h4>Engineering Excellence</h4>
                                <p>Customized designs built around your exact operational requirements, focused on efficiency and long-term cost savings.</p>
                            </div>
                        </div>
                        <div class="why-row rv d3">
                            <span class="wr-icon">🌐</span>
                            <div class="wr-body">
                                <h4>Global Reach</h4>
                                <p>Serving industries worldwide from our engineering base in Pune — local knowledge, international standards.</p>
                            </div>
                        </div>
                        <div class="why-row rv d4">
                            <span class="wr-icon">🛡️</span>
                            <div class="wr-body">
                                <h4>Reliable After-Sales Support</h4>
                                <p>Strong technical backing and dedicated support long after project handover — your operations are always protected.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="lifecycle-band section-sm">
        <div class="container">
            <div class="eyebrow rv">How We Work</div>
            <h2 class="headline-lg rv d1" style="margin:10px 0 32px">The Legecon Lifecycle</h2>
            <div class="lifecycle-steps rv d2">
                <div class="lc-step">
                    <div class="lc-num">01</div>
                    <div class="lc-icon-wrap">💡</div>
                    <div class="lc-name">Conceptualization</div>
                </div>
                <div class="lc-step">
                    <div class="lc-num">02</div>
                    <div class="lc-icon-wrap">📐</div>
                    <div class="lc-name">Design</div>
                </div>
                <div class="lc-step">
                    <div class="lc-num">03</div>
                    <div class="lc-icon-wrap">🏭</div>
                    <div class="lc-name">Panel Manufacturing</div>
                </div>
                <div class="lc-step">
                    <div class="lc-num">04</div>
                    <div class="lc-icon-wrap">💻</div>
                    <div class="lc-name">Programming</div>
                </div>
                <div class="lc-step">
                    <div class="lc-num">05</div>
                    <div class="lc-icon-wrap">🔌</div>
                    <div class="lc-name">Commissioning</div>
                </div>
                <div class="lc-step">
                    <div class="lc-num">06</div>
                    <div class="lc-icon-wrap">🎧</div>
                    <div class="lc-name">After Sales Support</div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-bottom" style="border-top:1px solid rgba(255,255,255,0.1);padding-top:24px">
                <p>© 2025 <strong>Legecon Exim Pvt. Ltd.</strong> — Pune, India</p><button class="btn btn-red" onclick="goto('contact')">Work With Us →</button>
            </div>
        </div>
    </footer>
</div>

<!-- ═══════════════════════════════
     PAGE: PRODUCTS
═══════════════════════════════ -->
<div id="page-products" class="page pt">
    <div class="page-header">
        <div class="container">
            <div class="eyebrow rv">What We Build</div>
            <h1 class="headline-xl rv d1" style="margin-top:10px">Our Product Range</h1>
            <p class="subtext rv d2" style="max-width:540px;margin-top:14px">Seven precision-engineered product lines covering every aspect of industrial automation and power management.</p>
        </div>
    </div>

    <section class="section bg-white">
        <div class="container">
            <div class="products-full-grid">
                <div class="product-card iot-card rv">
                    <div>
                        <div class="pc-icon">📡</div>
                    </div>
                    <div>
                        <span class="pc-num">01</span>
                        <div class="tag" style="margin-bottom:10px">Industry 4.0</div>
                        <h3>Industrial IoT 4.0 Solutions</h3>
                        <p>Smart connected systems leveraging Industry 4.0 technologies for real-time monitoring, predictive maintenance, remote control, and data-driven operational insights across your entire facility.</p>
                    </div>
                </div>
                <div class="product-card rv"><span class="pc-num">02</span>
                    <div class="pc-icon">⚡</div>
                    <h3>VFD Control Panels</h3>
                    <p>Variable Frequency Drive panels engineered for precise motor speed control, significant energy savings, and extended equipment lifespan across all load types and environments.</p>
                    <div class="tag" style="margin-top:12px">Drive Control</div>
                </div>
                <div class="product-card rv d1"><span class="pc-num">03</span>
                    <div class="pc-icon">🔄</div>
                    <h3>Synchronisation Panels</h3>
                    <p>Generator and grid synchronization panels for seamless power management, load sharing, and uninterrupted supply in critical infrastructure and power-sensitive applications.</p>
                    <div class="tag" style="margin-top:12px">Power Sync</div>
                </div>
                <div class="product-card rv d2"><span class="pc-num">04</span>
                    <div class="pc-icon">🗄️</div>
                    <h3>PCC Panels</h3>
                    <p>Power Control Centers built for high reliability in main distribution, feeder control, and comprehensive protection of complex electrical systems in large facilities.</p>
                    <div class="tag" style="margin-top:12px">Power Control</div>
                </div>
                <div class="product-card rv"><span class="pc-num">05</span>
                    <div class="pc-icon">🤖</div>
                    <h3>PLC Control Panels</h3>
                    <p>Custom PLC panels with advanced logic for sequential, process, and safety automation. Compatible with Siemens, Allen Bradley, Mitsubishi, and all major PLC brands.</p>
                    <div class="tag" style="margin-top:12px">PLC Automation</div>
                </div>
                <div class="product-card rv d1"><span class="pc-num">06</span>
                    <div class="pc-icon">🏗️</div>
                    <h3>MCC Panels</h3>
                    <p>Motor Control Centers designed for centralized control, protection, and monitoring of multiple motors in large-scale industrial installations with reliability as the priority.</p>
                    <div class="tag" style="margin-top:12px">Motor Control</div>
                </div>
                <div class="product-card rv d2"><span class="pc-num">07</span>
                    <div class="pc-icon">📊</div>
                    <h3>APFC Panels</h3>
                    <p>Automatic Power Factor Correction panels to eliminate reactive power penalties, reduce electricity bills, and improve overall power quality at your facility continuously.</p>
                    <div class="tag" style="margin-top:12px">Energy Efficiency</div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-bottom" style="border-top:1px solid rgba(255,255,255,0.1);padding-top:24px">
                <p>© 2025 <strong>Legecon Exim Pvt. Ltd.</strong></p><button class="btn btn-red" onclick="goto('contact')">Request a Quote →</button>
            </div>
        </div>
    </footer>
</div>

<!-- ═══════════════════════════════
     PAGE: SERVICES
═══════════════════════════════ -->
<div id="page-services" class="page pt">
    <div class="page-header">
        <div class="container">
            <div class="eyebrow rv">Engineering Services</div>
            <h1 class="headline-xl rv d1" style="margin-top:10px">Automation Services</h1>
            <p class="subtext rv d2" style="max-width:540px;margin-top:14px">From PLC programming to full turnkey project delivery — we provide every engineering service your automation project needs.</p>
        </div>
    </div>

    <section class="section bg-white">
        <div class="container">
            <div class="services-tabs-wrap">
                <div class="services-tab-list">
                    <div class="svc-tab active" onclick="switchSvc(this,'sp-plc')"><span class="st-icon">🤖</span><span class="st-name">PLC Programming</span><span class="st-num">01</span></div>
                    <div class="svc-tab" onclick="switchSvc(this,'sp-hmi')"><span class="st-icon">🖥️</span><span class="st-name">HMI Design</span><span class="st-num">02</span></div>
                    <div class="svc-tab" onclick="switchSvc(this,'sp-scada')"><span class="st-icon">📊</span><span class="st-name">SCADA Development</span><span class="st-num">03</span></div>
                    <div class="svc-tab" onclick="switchSvc(this,'sp-int')"><span class="st-icon">🔗</span><span class="st-name">System Integration</span><span class="st-num">04</span></div>
                    <div class="svc-tab" onclick="switchSvc(this,'sp-comm')"><span class="st-icon">✅</span><span class="st-name">Testing & Commissioning</span><span class="st-num">05</span></div>
                    <div class="svc-tab" onclick="switchSvc(this,'sp-retro')"><span class="st-icon">🔄</span><span class="st-name">Retrofitting & Upgrades</span><span class="st-num">06</span></div>
                </div>
                <div>
                    <div id="sp-plc" class="svc-panel active">
                        <div class="tag">PLC / Logic Control</div>
                        <h3>PLC Programming & Logic Development</h3>
                        <p class="subtext">Expert development of PLC programs using IEC 61131-3 languages for any application complexity — from simple sequences to complex safety systems.</p>
                        <div class="svc-bullets">
                            <div class="svc-bullet">Custom logic for sequential, process, and safety control</div>
                            <div class="svc-bullet">Safety PLC programming (SIL 1, SIL 2, SIL 3)</div>
                            <div class="svc-bullet">Multi-brand: Siemens, Allen Bradley, Mitsubishi, Schneider</div>
                            <div class="svc-bullet">Fault diagnostics, alarm management and reporting</div>
                            <div class="svc-bullet">Remote access and predictive maintenance programming</div>
                        </div>
                        <div class="tech-pills">
                            <span class="tech-pill">Siemens S7-1500</span><span class="tech-pill">Allen Bradley</span><span class="tech-pill">Mitsubishi FX</span><span class="tech-pill">Schneider Modicon</span><span class="tech-pill">CODESYS</span>
                        </div>
                    </div>
                    <div id="sp-hmi" class="svc-panel">
                        <div class="tag">HMI / Visualization</div>
                        <h3>HMI Design & Configuration</h3>
                        <p class="subtext">Intuitive, operator-friendly interfaces designed for clarity and reliability — giving operators full visibility and control over their processes at a glance.</p>
                        <div class="svc-bullets">
                            <div class="svc-bullet">Custom process mimics and graphical displays</div>
                            <div class="svc-bullet">Alarm management, event logging and trending</div>
                            <div class="svc-bullet">Multi-language and multi-user configurations</div>
                            <div class="svc-bullet">Touchscreen, panel-mounted and web-based HMI</div>
                            <div class="svc-bullet">Historical data reporting and analysis dashboards</div>
                        </div>
                        <div class="tech-pills">
                            <span class="tech-pill">WinCC</span><span class="tech-pill">FactoryTalk View</span><span class="tech-pill">Weintek</span><span class="tech-pill">Beijer</span><span class="tech-pill">Proface</span>
                        </div>
                    </div>
                    <div id="sp-scada" class="svc-panel">
                        <div class="tag">SCADA</div>
                        <h3>SCADA System Development</h3>
                        <p class="subtext">Comprehensive SCADA solutions for plant-wide supervisory control, real-time data acquisition, and enterprise-level integration with full IoT connectivity.</p>
                        <div class="svc-bullets">
                            <div class="svc-bullet">Plant-wide monitoring, supervisory control and historian</div>
                            <div class="svc-bullet">KPI dashboards and production reporting</div>
                            <div class="svc-bullet">Remote monitoring via web and mobile applications</div>
                            <div class="svc-bullet">OPC-UA and MQTT integration for IoT connectivity</div>
                            <div class="svc-bullet">Integration with ERP/MES systems (SAP, Oracle)</div>
                        </div>
                        <div class="tech-pills">
                            <span class="tech-pill">Ignition</span><span class="tech-pill">WinCC SCADA</span><span class="tech-pill">Wonderware</span><span class="tech-pill">AVEVA</span><span class="tech-pill">OPC-UA</span><span class="tech-pill">MQTT</span>
                        </div>
                    </div>
                    <div id="sp-int" class="svc-panel">
                        <div class="tag">Integration</div>
                        <h3>System Integration</h3>
                        <p class="subtext">Seamless integration of PLCs, HMIs, SCADA, ERP, MES, and third-party systems — creating a unified, intelligent plant environment with no data silos.</p>
                        <div class="svc-bullets">
                            <div class="svc-bullet">PLC-to-SCADA and PLC-to-HMI integration</div>
                            <div class="svc-bullet">ERP/MES connectivity (SAP, Oracle, Microsoft)</div>
                            <div class="svc-bullet">Industrial protocol bridging and conversion</div>
                            <div class="svc-bullet">Legacy system integration and migration services</div>
                            <div class="svc-bullet">Cloud platform integration (AWS IoT, Azure IoT)</div>
                        </div>
                        <div class="tech-pills">
                            <span class="tech-pill">Modbus RTU/TCP</span><span class="tech-pill">PROFIBUS</span><span class="tech-pill">PROFINET</span><span class="tech-pill">EtherNet/IP</span><span class="tech-pill">DeviceNet</span>
                        </div>
                    </div>
                    <div id="sp-comm" class="svc-panel">
                        <div class="tag">Commissioning</div>
                        <h3>Testing & Commissioning</h3>
                        <p class="subtext">Rigorous Factory Acceptance Testing, Site Acceptance Testing, and live commissioning support to ensure every system performs exactly as designed from day one.</p>
                        <div class="svc-bullets">
                            <div class="svc-bullet">FAT and SAT documentation and on-site execution</div>
                            <div class="svc-bullet">Loop checking, instrument calibration and verification</div>
                            <div class="svc-bullet">Pre-commissioning checks and punch-list resolution</div>
                            <div class="svc-bullet">Performance testing, tuning and optimization</div>
                            <div class="svc-bullet">Operator training and full documentation handover</div>
                        </div>
                    </div>
                    <div id="sp-retro" class="svc-panel">
                        <div class="tag">Modernization</div>
                        <h3>Retrofitting & Automation Upgrades</h3>
                        <p class="subtext">Transform aging systems into modern, reliable automation platforms — maximizing the return on existing assets with minimal downtime and disruption.</p>
                        <div class="svc-bullets">
                            <div class="svc-bullet">Legacy PLC migration and modernization programs</div>
                            <div class="svc-bullet">Panel retrofit with minimal production disruption</div>
                            <div class="svc-bullet">Addition of IoT sensors and connectivity layers</div>
                            <div class="svc-bullet">Energy efficiency upgrades with VFD integration</div>
                            <div class="svc-bullet">Obsolete component replacement and sourcing</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="turnkey-card rv">
                <div>
                    <h3>Turnkey Automation Solutions</h3>
                    <p>We handle complete automation projects end-to-end — design, supply, installation, programming, commissioning, and ongoing support. One partner. Total accountability. Guaranteed delivery.</p>
                </div>
                <button class="btn btn-red" onclick="goto('contact')" style="flex-shrink:0;white-space:nowrap">Start a Project →</button>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-bottom" style="border-top:1px solid rgba(255,255,255,0.1);padding-top:24px">
                <p>© 2025 <strong>Legecon Exim Pvt. Ltd.</strong></p><button class="btn btn-red" onclick="goto('contact')">Get a Quote →</button>
            </div>
        </div>
    </footer>
</div>

<!-- ═══════════════════════════════
     PAGE: INDUSTRIES
═══════════════════════════════ -->
<div id="page-industries" class="page pt">
    <div class="page-header">
        <div class="container">
            <div class="eyebrow rv">Sectors We Serve</div>
            <h1 class="headline-xl rv d1" style="margin-top:10px">Industries We Serve</h1>
            <p class="subtext rv d2" style="max-width:560px;margin-top:14px">Our automation solutions are deployed across the most demanding industrial environments — from water treatment plants to pharmaceutical manufacturing.</p>
        </div>
    </div>

    <section class="section bg-white">
        <div class="container">
            <div class="industries-full-grid">
                <div class="ind-card-full rv">
                    <div class="ind-header">
                        <div class="ind-icon-lg">💧</div>
                        <h3>Water & Wastewater Management</h3>
                    </div>
                    <p>Automated treatment, pumping, and distribution control systems for municipal and industrial water management facilities — ensuring regulatory compliance and operational efficiency.</p>
                    <div class="ind-tags"><span class="ind-tag">Water Treatment</span><span class="ind-tag">SCADA Monitoring</span><span class="ind-tag">Remote Control</span><span class="ind-tag">Pump Automation</span></div>
                </div>
                <div class="ind-card-full rv d1">
                    <div class="ind-header">
                        <div class="ind-icon-lg">🍔</div>
                        <h3>Food & Beverage Processing</h3>
                    </div>
                    <p>Hygienic automation designed for food-grade processing, packaging, and quality control — meeting international food safety standards while maximizing throughput and minimizing waste.</p>
                    <div class="ind-tags"><span class="ind-tag">GMP Compliance</span><span class="ind-tag">Batch Control</span><span class="ind-tag">CIP Systems</span><span class="ind-tag">Quality Tracking</span></div>
                </div>
                <div class="ind-card-full rv">
                    <div class="ind-header">
                        <div class="ind-icon-lg">🛢️</div>
                        <h3>Oil & Gas / Energy</h3>
                    </div>
                    <p>Robust control systems for upstream, midstream, and downstream operations in hazardous environments — built for maximum reliability, safety, and uptime in demanding conditions.</p>
                    <div class="ind-tags"><span class="ind-tag">ATEX Compliance</span><span class="ind-tag">Safety PLCs</span><span class="ind-tag">Pipeline Control</span><span class="ind-tag">Emergency Shutdown</span></div>
                </div>
                <div class="ind-card-full rv d1">
                    <div class="ind-header">
                        <div class="ind-icon-lg">🌡️</div>
                        <h3>HVAC & Smart Building Automation</h3>
                    </div>
                    <p>Intelligent building management systems for climate control, energy management, and occupant comfort — dramatically reducing energy costs while improving building performance.</p>
                    <div class="ind-tags"><span class="ind-tag">BMS Integration</span><span class="ind-tag">Energy Management</span><span class="ind-tag">Smart Controls</span><span class="ind-tag">HVAC Automation</span></div>
                </div>
                <div class="ind-card-full rv">
                    <div class="ind-header">
                        <div class="ind-icon-lg">🌿</div>
                        <h3>Sugar & Agriculture (Solar Pumping)</h3>
                    </div>
                    <p>Specialized automation for sugar processing and solar-powered agricultural pumping systems — bringing precision control and renewable energy to rural and agricultural operations.</p>
                    <div class="ind-tags"><span class="ind-tag">Solar VFD</span><span class="ind-tag">Irrigation Control</span><span class="ind-tag">Process Automation</span><span class="ind-tag">Energy Savings</span></div>
                </div>
                <div class="ind-card-full rv d1">
                    <div class="ind-header">
                        <div class="ind-icon-lg">🧪</div>
                        <h3>Pharmaceutical & Chemical Plants</h3>
                    </div>
                    <p>GMP-compliant automation for critical process control in pharmaceutical and chemical manufacturing — ensuring batch integrity, full traceability, and strict regulatory compliance.</p>
                    <div class="ind-tags"><span class="ind-tag">GMP Compliance</span><span class="ind-tag">21 CFR Part 11</span><span class="ind-tag">Batch Records</span><span class="ind-tag">Process Control</span></div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-bottom" style="border-top:1px solid rgba(255,255,255,0.1);padding-top:24px">
                <p>© 2025 <strong>Legecon Exim Pvt. Ltd.</strong></p><button class="btn btn-red" onclick="goto('contact')">Discuss Your Project →</button>
            </div>
        </div>
    </footer>
</div>

<!-- ═══════════════════════════════
     PAGE: CONTACT
═══════════════════════════════ -->
<div id="page-contact" class="page pt">
    <div class="page-header">
        <div class="container">
            <div class="eyebrow rv">Get In Touch</div>
            <h1 class="headline-xl rv d1" style="margin-top:10px">Let's Work Together</h1>
            <p class="subtext rv d2" style="max-width:500px;margin-top:14px">Share your project requirements and our engineering team will respond within 24 hours with a tailored proposal.</p>
        </div>
    </div>

    <section class="section bg-white">
        <div class="container">
            <div class="contact-layout">

                <div class="rv">
                    <div class="contact-details">
                        <div class="cd-row">
                            <div class="cd-icon-wrap">📍</div>
                            <div>
                                <div class="cd-label">Office Address</div>
                                <div class="cd-value">Block No. 108, Building No. 9,<br>Lokmanya Nagar, Sadashiv Peth,<br>Pune 411030, Maharashtra, India</div>
                            </div>
                        </div>
                        <div class="cd-row">
                            <div class="cd-icon-wrap">📞</div>
                            <div>
                                <div class="cd-label">Phone</div>
                                <div class="cd-value">
                                    <a href="tel:+917020893551">+91 70208 93551</a><br>
                                    <a href="tel:+917720023099">+91 77200 23099</a><br>
                                    <a href="tel:+912029991103">+91 20 2999 1103</a>
                                </div>
                            </div>
                        </div>
                        <div class="cd-row">
                            <div class="cd-icon-wrap">✉️</div>
                            <div>
                                <div class="cd-label">Email</div>
                                <div class="cd-value"><a href="mailto:legeconeximpvtltd@gmail.com">legeconeximpvtltd@gmail.com</a></div>
                            </div>
                        </div>
                        <div class="cd-row">
                            <div class="cd-icon-wrap">🌐</div>
                            <div>
                                <div class="cd-label">Website</div>
                                <div class="cd-value"><a href="https://www.legecon.com" target="_blank">www.legecon.com</a></div>
                            </div>
                        </div>
                    </div>

                    <div class="iso-box">
                        <div class="iso-badge">ISO</div>
                        <div class="iso-text"><strong>ISO 9001:2015 Certified</strong>Quality Management System — ensuring consistent, high-quality delivery on every project.</div>
                    </div>

                    <div class="contact-partners" style="margin-top:28px">
                        <h4>Technology Partners</h4>
                        <div class="cp-list">
                            <div class="cp-item"><span style="font-size:20px">🇮🇱</span><span class="cp-name">RealiteQ</span><span class="cp-country">Israel</span></div>
                            <div class="cp-item"><span style="font-size:20px">🇸🇪</span><span class="cp-name">Emotron</span><span class="cp-country">Sweden</span></div>
                            <div class="cp-item"><span style="font-size:20px">🇮🇳</span><span class="cp-name">Selec</span><span class="cp-country">India</span></div>
                        </div>
                    </div>
                </div>

                <div class="contact-form-card rv d2">
                    <div class="cf-title">Send an Inquiry</div>
                    <div class="cf-sub">Our team will get back to you within 24 business hours.</div>
                    <form action="{{route('frontend.store-contact-us')}}" method="post" class="php-email-form" >
                        @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Full Name *</label>
                                <input type="text" class="form-input" name="name" id="inputFirstName" value="{{old('name')}}" placeholder="Enter Name" required>
                                @error('name')
                                    <span style="color:red"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Company *</label>
                                <input type="text" class="form-input" name="company" id="inputEmail4" value="{{old('company')}}" placeholder="Enter company" required>
                                @error('company')
                                    <span style="color:red"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-input" name="email" id="inputEmail4" value="{{old('email')}}" placeholder="Enter Email" required>
                                @error('email')
                                    <span style="color:red"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-input" id="inputPhoneNumber" name="phone_no" value="{{old('phone_no')}}" placeholder="Enter Phone Number" required>
                                @error('phone_no')
                                    <span style="color:red"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Industry</label>
                            <select class="form-select" name="industry">
                                <option>Water & Wastewater Management</option>
                                <option>Food & Beverage Processing</option>
                                <option>Oil & Gas / Energy</option>
                                <option>HVAC & Smart Building</option>
                                <option>Sugar & Agriculture</option>
                                <option>Pharmaceutical & Chemical</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Service Required</label>
                            <select class="form-select" name="service_required">
                                <option>PLC Programming & Logic Development</option>
                                <option>HMI Design & Configuration</option>
                                <option>SCADA System Development</option>
                                <option>Control Panel Manufacturing</option>
                                <option>Industrial IoT Solutions</option>
                                <option>Turnkey Automation Project</option>
                                <option>Retrofitting & Upgrades</option>
                                <option>System Integration</option>
                                <option>Testing & Commissioning</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Project Description *</label>
                            <textarea class="form-textarea" name="product_description" placeholder="Describe your project, requirements, timelines, and any relevant specifications..."></textarea>
                        </div>
                        <div class="col-12" id="RecaptchaField2">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @error('g-recaptcha-response')
                            <span style="color:red"><small>{{ $message }}</small></span>
                            @enderror
                        </div>
                        <div class="form-footer">
                            <button class="btn btn-red" id="submit-btn" type="submit">Send Inquiry →</button>
                            <p class="form-note">We respond within 24 business hours.<br>All inquiries are kept confidential.</p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

@include('sweetalert::alert') 


    @endsection