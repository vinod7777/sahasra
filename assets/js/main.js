/* --- SAHASRA BARATH CORE JS --- */

document.addEventListener("DOMContentLoaded", () => {
    // 1. Intersection Observer for 'Reveal' animations
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal').forEach((el) => {
        observer.observe(el);
    });

    // 2. Sticky Header Logic
    const header = document.querySelector('nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // 3. 3D Tilt Effect for Cards
    document.querySelectorAll('.project-card, .review-card, .service-card-premium').forEach(card => {
        const inner = card.querySelector('.tilt-inner');
        if(!inner) return;
        
        card.addEventListener('mousemove', e => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = (centerY - y) / 10;
            const rotateY = (x - centerX) / 10;
            inner.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.05)`;
        });
        
        card.addEventListener('mouseleave', () => {
            inner.style.transform = `rotateX(0deg) rotateY(0deg) scale(1)`;
        });
    });
});

// 4. WebGL Displacement Slider (Only if #slider exists)
const initSlider = () => {
    const sliderParent = document.getElementById('slider');
    if (!sliderParent) return;

    const displacementSlider = function(opts) {
        let vertex = `
            varying vec2 vUv;
            void main() {
              vUv = uv;
              gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
            }
        `;
        let fragment = `
            varying vec2 vUv;
            uniform sampler2D currentImage;
            uniform sampler2D nextImage;
            uniform float dispFactor;

            void main() {
                vec2 uv = vUv;
                float intensity = 0.3;
                vec4 orig1 = texture2D(currentImage, uv);
                vec4 orig2 = texture2D(nextImage, uv);
                vec4 _currentImage = texture2D(currentImage, vec2(uv.x, uv.y + dispFactor * (orig2.r * intensity)));
                vec4 _nextImage = texture2D(nextImage, vec2(uv.x, uv.y + (1.0 - dispFactor) * (orig1.r * intensity)));
                gl_FragColor = mix(_currentImage, _nextImage, dispFactor);
            }
        `;

        let images = opts.images, sliderImages = [];
        let renderer = new THREE.WebGLRenderer({ antialias: false });
        renderer.setPixelRatio(window.devicePixelRatio);
        renderer.setClearColor(0x0B0F19, 1.0);
        renderer.setSize(window.innerWidth, window.innerHeight);
        opts.parent.appendChild(renderer.domElement);

        let loader = new THREE.TextureLoader();
        loader.crossOrigin = "anonymous";
        images.forEach((img) => {
            let tex = loader.load(img.getAttribute('src') + '?v=' + Date.now());
            tex.magFilter = tex.minFilter = THREE.LinearFilter;
            sliderImages.push(tex);
        });

        let scene = new THREE.Scene();
        let camera = new THREE.OrthographicCamera(window.innerWidth / -2, window.innerWidth / 2, window.innerHeight / 2, window.innerHeight / -2, 1, 1000);
        camera.position.z = 1;

        let mat = new THREE.ShaderMaterial({
            uniforms: {
                dispFactor: { type: "f", value: 0.0 },
                currentImage: { type: "t", value: sliderImages[0] },
                nextImage: { type: "t", value: sliderImages[1] },
            },
            vertexShader: vertex,
            fragmentShader: fragment,
            transparent: true,
            opacity: 1.0
        });

        let geometry = new THREE.PlaneBufferGeometry(window.innerWidth, window.innerHeight, 1);
        let object = new THREE.Mesh(geometry, mat);
        scene.add(object);

        let currentIndex = 0;
        let isAnimating = false;

        const navigateTo = (slideId) => {
            if (isAnimating) return;
            isAnimating = true;

            const pagButtons = document.querySelectorAll('#pagination button');
            pagButtons.forEach(b => b.classList.remove('active'));
            pagButtons[slideId].classList.add('active');

            mat.uniforms.nextImage.value = sliderImages[slideId];
            TweenMax.to(mat.uniforms.dispFactor, 1, {
                value: 1,
                ease: Expo.easeInOut,
                onComplete: () => {
                    mat.uniforms.currentImage.value = sliderImages[slideId];
                    mat.uniforms.dispFactor.value = 0.0;
                    isAnimating = false;
                }
            });

            // Text Animations
            const titles = document.querySelectorAll('[data-slide-title]');
            const statuses = document.querySelectorAll('[data-slide-status]');
            const titleEl = document.getElementById('slide-title');
            const statusEl = document.getElementById('slide-status');

            TweenMax.to([titleEl, statusEl], 0.5, { autoAlpha: 0, y: 20, onComplete: () => {
                titleEl.innerHTML = titles[slideId].innerHTML;
                statusEl.innerHTML = statuses[slideId].innerHTML;
                TweenMax.to([titleEl, statusEl], 0.5, { autoAlpha: 1, y: 0 });
            }});
        };

        const startAutoPlay = () => {
            setInterval(() => {
                currentIndex = (currentIndex + 1) % sliderImages.length;
                navigateTo(currentIndex);
            }, 5000);
        };

        document.querySelectorAll('#pagination button').forEach((btn, idx) => {
            btn.onclick = () => { currentIndex = idx; navigateTo(idx); };
        });

        startAutoPlay();
        
        window.onresize = () => {
            renderer.setSize(window.innerWidth, window.innerHeight);
            camera.updateProjectionMatrix();
        };

        const animate = () => {
            requestAnimationFrame(animate);
            renderer.render(scene, camera);
        };
        animate();
    };

    imagesLoaded(sliderParent.querySelectorAll('img'), () => {
        new displacementSlider({
            parent: sliderParent,
            images: Array.from(sliderParent.querySelectorAll('img'))
        });
    });
};

initSlider();
