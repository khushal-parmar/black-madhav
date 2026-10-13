<?php
/**
 * HeroBackground Component
 * Implements 3D Three.js particle field, rotating wireframe icosahedron, and CSS glowing fallback
 */
function renderHeroBackground() {
    ?>
    <div class="absolute inset-0 z-0 overflow-hidden pointer-events-none">
      <!-- Dark Blue/Indigo Base Gradient -->
      <div class="absolute inset-0 bg-gradient-to-b from-blue-900 to-indigo-950 z-0"></div>

      <!-- CSS Glowing Orbs & Grid Fallback -->
      <div id="hero-css-fallback" class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -left-24 top-10 h-72 w-72 max-w-none rounded-full opacity-30 animate-pulse"
             style="background: radial-gradient(circle, rgba(56,189,248,0.45) 0%, transparent 70%);"></div>
        <div class="absolute right-0 top-1/4 h-64 w-64 max-w-none rounded-full opacity-20 animate-pulse"
             style="background: radial-gradient(circle, rgba(14,165,233,0.35) 0%, transparent 70%); animation-delay: 2s;"></div>
        <div class="absolute bottom-0 left-1/3 h-80 w-80 max-w-none rounded-full opacity-15 animate-pulse"
             style="background: radial-gradient(circle, rgba(59,130,246,0.25) 0%, transparent 75%); animation-delay: 4s;"></div>
        <div class="absolute inset-0 opacity-5"
             style="background-image: linear-gradient(rgba(56,189,248,0.14) 1px, transparent 1px), linear-gradient(90deg, rgba(56,189,248,0.14) 1px, transparent 1px); background-size: 72px 72px;"></div>
        <div class="absolute inset-0 opacity-3"
             style="background-image: radial-gradient(rgba(56,189,248,0.22) 1px, transparent 22px); background-size: 48px 48px;"></div>
      </div>

      <!-- Three.js Canvas Container -->
      <canvas id="hero-three-canvas" class="absolute inset-0 z-10 w-full h-full pointer-events-none"></canvas>
    </div>

    <!-- Three.js Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script>
      (function() {
        const canvas = document.getElementById('hero-three-canvas');
        if (!canvas || !window.THREE) return;

        try {
          const scene = new THREE.Scene();
          const camera = new THREE.PerspectiveCamera(42, window.innerWidth / window.innerHeight, 0.1, 1000);
          camera.position.set(0, 0, 8);

          const renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true });
          renderer.setSize(window.innerWidth, window.innerHeight);
          renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

          // Lights
          const ambientLight = new THREE.AmbientLight(0xffffff, 0.6);
          scene.add(ambientLight);

          const dirLight = new THREE.DirectionalLight(0x93c5fd, 0.4);
          dirLight.position.set(5, 5, 5);
          scene.add(dirLight);

          // Particles
          const count = 2200;
          const positions = new Float32Array(count * 3);
          for (let i = 0; i < count; i++) {
            const radius = 2.8 + Math.random() * 6.5;
            const theta = Math.random() * Math.PI * 2;
            const phi = Math.acos((Math.random() - 0.5) * 2);
            positions[i * 3] = Math.sin(phi) * Math.cos(theta) * radius;
            positions[i * 3 + 1] = Math.sin(phi) * Math.sin(theta) * radius;
            positions[i * 3 + 2] = Math.cos(phi) * radius;
          }

          const particleGeometry = new THREE.BufferGeometry();
          particleGeometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));

          const particleMaterial = new THREE.PointsMaterial({
            color: 0x7dd3fc,
            size: 0.06,
            transparent: true,
            opacity: 0.65,
            depthWrite: false
          });

          const particleMesh = new THREE.Points(particleGeometry, particleMaterial);
          scene.add(particleMesh);

          // Rotating Wireframe Icosahedron
          const icoGeo = new THREE.IcosahedronGeometry(3.2, 1);
          const icoMat = new THREE.MeshBasicMaterial({
            color: 0x38bdf8,
            wireframe: true,
            transparent: true,
            opacity: 0.34
          });
          const wireframe = new THREE.Mesh(icoGeo, icoMat);
          scene.add(wireframe);

          let clock = new THREE.Clock();

          function animate() {
            requestAnimationFrame(animate);
            const elapsedTime = clock.getElapsedTime();
            const delta = clock.getDelta();

            // Particles rotation
            particleMesh.rotation.x = Math.sin(elapsedTime * 0.08) * 0.08;
            particleMesh.rotation.y += 0.002;
            particleMesh.position.y = Math.sin(elapsedTime * 0.12) * 0.15;

            // Wireframe rotation
            wireframe.rotation.x = Math.sin(elapsedTime * 0.15) * 0.15;
            wireframe.rotation.y += 0.005;
            wireframe.rotation.z += 0.003;

            renderer.render(scene, camera);
          }
          animate();

          window.addEventListener('resize', function() {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
          });
        } catch (e) {
          console.warn("WebGL not supported or disabled:", e);
        }
      })();
    </script>
    <?php
}
