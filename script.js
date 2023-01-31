const photo = document.getElementById("uploadphoto");

// photo.addEventListener('click',()=>{
//     document.createElement("img");
//     let att = document.createAttribute("src");
//     // att.value = photo
//     console.log(photo.nodeValue);
// })

var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};



const confirmDel=()=>{
	let modalWrapper = document.getElementById('modal_wrapper');
	modalWrapper.style.display = "flex";
}

const cancleDel =()=>{
	let modalWrapper = document.getElementById('modal_wrapper');
	modalWrapper.style.display = "none";
}

// document.getElementById("delete1").addEventListener("click",()=>{
// 	const modalwrapper = document.getElementById("modal_wrapper");
// 	console.log(modalwrapper);
// 	modalwrapper.style.display = "flex";
// })