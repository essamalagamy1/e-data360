import './bootstrap';
import { animate, inView, scroll, stagger } from 'motion';

document.addEventListener('DOMContentLoaded', () => {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // =========================================================================
    // 1. Navbar Glassmorphism & Elevation on Scroll
    // =========================================================================
    const navbar = document.getElementById('navbar');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('bg-slate-950/90', 'backdrop-blur-xl', 'shadow-2xl', 'border-cyan-500/20');
                navbar.classList.remove('bg-slate-950/60', 'border-white/10');
            } else {
                navbar.classList.remove('bg-slate-950/90', 'backdrop-blur-xl', 'shadow-2xl', 'border-cyan-500/20');
                navbar.classList.add('bg-slate-950/60', 'border-white/10');
            }
        }, { passive: true });
    }

    // =========================================================================
    // 2. Mobile Menu Toggle with Motion
    // =========================================================================
    const mobileMenuBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    if (mobileMenuBtn && mobileMenu) {
        mobileMenuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            const icon = mobileMenuBtn.querySelector('i');

            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                if (!prefersReducedMotion) {
                    animate(mobileMenu, { opacity: [0, 1], y: [-15, 0] }, { duration: 0.25, easing: 'ease-out' });
                }
                if (icon) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                }
            } else {
                if (!prefersReducedMotion) {
                    animate(mobileMenu, { opacity: [1, 0], y: [0, -10] }, { duration: 0.2 }).then(() => {
                        mobileMenu.classList.add('hidden');
                    });
                } else {
                    mobileMenu.classList.add('hidden');
                }
                if (icon) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            }
        });
    }

    // =========================================================================
    // 3. Stats Counter Animation with Motion
    // =========================================================================
    const counterElements = document.querySelectorAll('[data-counter]');
    counterElements.forEach((el) => {
        const rawTarget = el.getAttribute('data-counter') || el.innerText;
        const numericMatch = rawTarget.match(/(\d+)/);
        if (!numericMatch) return;

        const targetNumber = parseInt(numericMatch[1], 10);
        const prefix = rawTarget.startsWith('+') ? '+' : (rawTarget.includes('٪') || rawTarget.includes('%') ? '' : '');
        const suffix = rawTarget.endsWith('+') ? '+' : (rawTarget.includes('%') ? '%' : (rawTarget.includes('٪') ? '٪' : ''));

        if (prefersReducedMotion) {
            el.innerText = rawTarget;
            return;
        }

        inView(el, () => {
            const controls = animate(0, targetNumber, {
                duration: 1.8,
                easing: [0.16, 1, 0.3, 1],
                onUpdate: (value) => {
                    const currentInt = Math.round(value);
                    if (rawTarget.startsWith('+')) {
                        el.innerText = `+${currentInt}`;
                    } else if (rawTarget.endsWith('+')) {
                        el.innerText = `${currentInt}+`;
                    } else if (rawTarget.includes('%')) {
                        el.innerText = `${currentInt}%`;
                    } else if (rawTarget.includes('٪')) {
                        el.innerText = `${currentInt}٪`;
                    } else {
                        el.innerText = currentInt.toString();
                    }
                }
            });
            return () => controls.stop();
        }, { margin: '0px 0px -50px 0px' });
    });

    // =========================================================================
    // 4. Staggered Scroll Reveal with Motion
    // =========================================================================
    if (!prefersReducedMotion) {
        // Single motion reveal items
        const revealItems = document.querySelectorAll('.motion-reveal');
        revealItems.forEach((el) => {
            inView(el, () => {
                animate(el, { opacity: [0, 1], y: [24, 0] }, { duration: 0.55, easing: [0.16, 1, 0.3, 1] });
            }, { margin: '0px 0px -60px 0px' });
        });

        // Group Stagger items (e.g. services, features, portfolios)
        const staggerContainers = document.querySelectorAll('[data-motion-stagger]');
        staggerContainers.forEach((container) => {
            const items = container.querySelectorAll('.stagger-item');
            if (items.length > 0) {
                inView(container, () => {
                    animate(
                        items,
                        { opacity: [0, 1], y: [30, 0] },
                        { delay: stagger(0.1, { start: 0.1 }), duration: 0.5, easing: [0.16, 1, 0.3, 1] }
                    );
                }, { margin: '0px 0px -80px 0px' });
            }
        });
    }

    // =========================================================================
    // 5. Interactive Simulated Data Dashboard Tabs in Hero
    // =========================================================================
    const dashboardTabs = document.querySelectorAll('[data-dashboard-tab]');
    const chartBars = document.querySelectorAll('.demo-chart-bar');
    const metricDisplay = document.getElementById('demo-metric-val');

    const demoDatasets = {
        sales: {
            metric: '+38.5%',
            title: 'نمو المبيعات السنوي',
            heights: ['45%', '65%', '85%', '95%', '70%', '100%']
        },
        kpi: {
            metric: '99.4%',
            title: 'دقة وتكامل البيانات',
            heights: ['80%', '90%', '95%', '92%', '98%', '99%']
        },
        efficiency: {
            metric: '4.2x',
            title: 'تسريع اتخاذ القرار',
            heights: ['30%', '50%', '60%', '75%', '88%', '94%']
        }
    };

    if (dashboardTabs.length > 0 && chartBars.length > 0) {
        dashboardTabs.forEach((tab) => {
            tab.addEventListener('click', (e) => {
                e.preventDefault();
                const key = tab.getAttribute('data-dashboard-tab');
                const data = demoDatasets[key];
                if (!data) return;

                // Update active tab styles
                dashboardTabs.forEach(t => {
                    t.classList.remove('bg-cyan-500/20', 'text-cyan-300', 'border-cyan-500/40');
                    t.classList.add('text-slate-400', 'border-transparent');
                });
                tab.classList.add('bg-cyan-500/20', 'text-cyan-300', 'border-cyan-500/40');
                tab.classList.remove('text-slate-400', 'border-transparent');

                // Animate bars
                chartBars.forEach((bar, idx) => {
                    const newHeight = data.heights[idx] || '50%';
                    if (!prefersReducedMotion) {
                        animate(bar, { height: newHeight }, { duration: 0.5, easing: 'ease-out' });
                    } else {
                        bar.style.height = newHeight;
                    }
                });

                // Update Metric
                if (metricDisplay) {
                    metricDisplay.innerText = data.metric;
                    if (!prefersReducedMotion) {
                        animate(metricDisplay, { scale: [1.2, 1], opacity: [0.5, 1] }, { duration: 0.3 });
                    }
                }
            });
        });
    }

    // =========================================================================
    // 6. Back To Top Button Smooth Scroll
    // =========================================================================
    const backToTopBtn = document.getElementById('back-to-top');
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                backToTopBtn.classList.remove('opacity-0', 'invisible', 'translate-y-6');
                backToTopBtn.classList.add('opacity-100', 'visible', 'translate-y-0');
            } else {
                backToTopBtn.classList.add('opacity-0', 'invisible', 'translate-y-6');
                backToTopBtn.classList.remove('opacity-100', 'visible', 'translate-y-0');
            }
        }, { passive: true });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // =========================================================================
    // 7. Smooth Scroll for Anchor Links
    // =========================================================================
    document.querySelectorAll('a[href^="#"]:not([href="#"])').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});
