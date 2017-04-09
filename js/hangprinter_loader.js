if ( ! Detector.webgl ) Detector.addGetWebGLMessage();

var container, stats, controls;
var mesh, mesh2;
var dx, dy, dz;
var camera, cameraTarget, scene, renderer;

init();
animate();

function init() {

	container = document.getElementById( 'threejs' );
	//document.body.appendChild( container );

	camera = new THREE.PerspectiveCamera( 45, window.innerWidth / window.innerHeight, 1, 1000 );
	camera.position.set( 0, 0.5, 4 );

	cameraTarget = new THREE.Vector3( 0, 0, 0 );

	scene = new THREE.Scene();
	scene.fog = new THREE.Fog( 0x72645b, 2, 15 );


	// Ground
	var texture = THREE.ImageUtils.loadTexture( "images/ground_texture2.jpg" );
	// assuming you want the texture to repeat in both directions:
	texture.wrapS = THREE.RepeatWrapping;
	texture.wrapT = THREE.RepeatWrapping;

	// how many times to repeat in each direction; the default is (1,1),
	//   which is probably why your example wasn't working
	texture.repeat.set( 8, 8 );

	var plane = new THREE.Mesh(
		new THREE.PlaneBufferGeometry( 40, 40 ),
		new THREE.MeshPhongMaterial( { map: texture } )
	);

	plane.rotation.x = -Math.PI/2;
	plane.position.y = -0.5;
	scene.add( plane );

	plane.receiveShadow = true;


	// ASCII file

	var loader = new THREE.STLLoader();
	loader.load( 'models/model3.stl', function ( geometry ) {

		var material = new THREE.MeshPhongMaterial( { color: 0x555533, specular: 0x111111, shininess: 200 } );
		mesh = new THREE.Mesh( geometry, material );

		mesh.rotation.set( -Math.PI/2, 0, -Math.PI/4 );
		mesh.position.set( 0, 0.5, 0 );
		mesh.scale.set( 0.2, 0.2, 0.2 );

		mesh.castShadow = true;
		//mesh.receiveShadow = true;

		scene.add( mesh );

	} );

	loader.load( 'models/babel.stl', function ( geometry2 ) {

		var material2 = new THREE.MeshPhongMaterial( { color: 0x9c6431, specular: 0x9c6431, shininess: 200 } );
		mesh2 = new THREE.Mesh( geometry2, material2 );

		mesh2.position.set( 0, -1.7, -2 );
		mesh2.rotation.set( -Math.PI/2, 0, 0 );
		mesh2.scale.set( 0.2, 0.3, 0.2 );

		//mesh.receiveShadow = true;

		scene.add( mesh2 );

	} );

	// Lights
	scene.add( new THREE.HemisphereLight( 0x443333, 0x111122 ) );

	addShadowedLight( 1, 1, 1, 0xffffff, 1.35 );
	// renderer

	renderer = new THREE.WebGLRenderer( { antialias: true, alpha: true } );
	renderer.setClearColor( 0xffffff, 0 );
	renderer.setPixelRatio( window.devicePixelRatio );
	renderer.setSize( window.innerWidth, window.innerHeight );

	renderer.gammaInput = true;
	renderer.gammaOutput = true;

	renderer.shadowMap.enabled = true;
	renderer.shadowMap.renderReverseSided = false;

	controls = new THREE.OrbitControls( camera, renderer.domElement );
	controls.enableZoom = false;

	container.appendChild( renderer.domElement );

	window.addEventListener( 'resize', onWindowResize, false );

}

function addShadowedLight( x, y, z, color, intensity ) {

	var directionalLight = new THREE.DirectionalLight( color, intensity );
	directionalLight.position.set( x, y, z );
	scene.add( directionalLight );

	directionalLight.castShadow = true;

	var d = 1;
	directionalLight.shadow.camera.left = -d;
	directionalLight.shadow.camera.right = d;
	directionalLight.shadow.camera.top = d;
	directionalLight.shadow.camera.bottom = -d;
	directionalLight.shadow.camera.near = 1;
	directionalLight.shadow.camera.far = 4;

	directionalLight.shadow.mapSize.width = 1024;
	directionalLight.shadow.mapSize.height = 1024;
	directionalLight.shadow.bias = -0.005;

}

function onWindowResize() {

	camera.aspect = window.innerWidth / window.innerHeight;
	camera.updateProjectionMatrix();
	renderer.setSize( window.innerWidth, window.innerHeight );

}

function animate() {

	requestAnimationFrame( animate );
	controls.update();
	render();

}

function render() {

	var timer = Date.now() * 0.0005;

	if(mesh && mesh2){
		dx = (Math.random()*0.01);
		dy = 0; //(Math.random()*0.01) - 0.005;
		dz = (Math.random()*0.01);
		if(mesh2.position.y <-1){
		mesh.position.x = Math.cos( timer ) * 0.5;
		mesh.position.z = -2+Math.sin( timer ) * 0.5;
		mesh.position.y += 0.0001;
		mesh2.position.y += 0.0001;
		//console.log(mesh2.position.y);
		}
	}

	renderer.render( scene, camera );

}
