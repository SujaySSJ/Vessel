<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="indexStyle.css">
	<link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</head>
<body>
	<div class="header-container">
		<div id="website_name">
			<h1 id="vessel">Vessel</h1>
		</div>
		<div id="website_logo">
			<img src="images/logo.png" alt="" height="100%" width="100%">
		</div>
		<div id="user_details">
			<div id="username">
				<h1 id="user-name">Sujay Jagtap</h1>
				<h1 id="user-class">T.E. CMPN 1</h1>
				<button onclick="location.href='about.html';">Logout</button>
			</div>
			<div id="userphoto">
				<img src="images/userphoto.jpg">
			</div>
		</div>
	</div>
	<div class="main-container">
		<div id="recentlyShared">
			<h1>Stuff you shared</h1>
			<ul id="yourfiles">
				<li class="public">
					<h3>Web Programming</h3>
				</li>
				<li class="public">
					<h3>WordPress The Missing Manual, 2nd Edition - Matthew MacD</h3>
				</li>
				<li class="group">
					<h3>The Hacker's Manual (2015)</h3>
				</li>
				<li class="private">
					<h3>OS All Programs</h3>
				</li>
				<li class="private">
					<h3>Alzheimer’s and the brain</h3>
				</li>
				<li class="public">
					<h3>Hacking Wireless Networks For Dummies</h3>
				</li>
				<li class="group"> 
					<h3>Java Programming</h3>
				</li>
				<li class="public">
					<h3>Python Programming</h3>
				</li>
			</ul>
			<div id="shareFile">
				<form action="share.php" method="post">
				<input type="text" placeholder="User ID"><br>
				<input type="text" placeholder="File ID"><br>
				<input type="submit" value="Share"><br>
				</form>
			</div>
		</div>
		<div id="allShared">
			<h1>Documents shared with you.</h1>
			<input type="image" id="uploadbtn" src="images/uploadicon.png" height="150px" width="150px">
			<input type="image" id="refreshbtn" src="images/refreshicon.png" onclick="location.href='dashboard.php';" height="150px" width="150px">
			<input type="image" id="downloadbtn" src="images/downloadicon.ico" height="150px" width="150px">

			<div class="layout">
				<div class="outer_layer">
					<div class="content">
						<div class="logo">
							<img src="images/pdflogo.png" alt="Logo" height="150px" width="180px">
						</div>
						<div class="information">
							<div id="fileName"><a href="files/Web Programming.pdf">Web Programming</a></div><br>
							<div id="fileDescripion">This book looks at many aspects of web development, including the language used to make web pages and ways to make web pages look good,
							make web pages accept information from visitors, and create programs to
							create other web pages! If that seems like a lot of information, don’t worry.
							It’s all broken up into manageable pieces so that you can consume the information
							at your own pace.</div><br>
							<div id="uploaderName">Uploaded By:Sujay Jagtap</div><br>
							<div id="uploadTime"><span id="date">12/12/12 Thursday</span>&nbsp;<span id="time">7:45 pm</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="layout">
				<div class="outer_layer">
					<div class="content">
						<div class="logo">
							<img src="images/pdflogo.png" alt="Logo" height="150px" width="180px">
						</div>
						<div class="information">
							<div id="fileName"><a href="files/WordPress The Missing Manual, 2nd Edition - Matthew MacD.pdf">WordPress The Missing Manual, 2nd Edition - Matthew MacD</a></div><br>
							<div id="fileDescripion">This is where the ridiculously popular web publishing tool called WordPress comes in. WordPress makes you a basic deal: You write the content, and WordPress takes care of the rest.</div><br>
							<div id="uploaderName">Uploaded By:Sujay Jagtap</div><br>
							<div id="uploadTime"><span id="date">12/12/12 Thursday</span>&nbsp;<span id="time">7:45 pm</span></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="layout">
				<div class="outer_layer">
					<div class="content">
						<div class="logo">
							<img src="images/pdflogo.png" alt="Logo" height="150px" width="180px">
						</div>
						<div class="information">
							<div id="fileName"><a href="files/The Hacker's Manual (2015).pdf">The Hacker's Manual (2015)</a></div><br>
							<div id="fileDescripion">Over 80 hacking tutorials to get your teeth into! Networking – dive into the protocols, build a network and analyse your traffic. Sysadmin – harness the power of Docker and learn time-saving terminal tricks. Hacking – get a full Linux OS on your phone and hack your distro for speed. Privacy – give The Man the slip and protect your privacy with our help.</div><br>
							<div id="uploaderName">Uploaded By:Sujay Jagtap</div><br>
							<div id="uploadTime"><span id="date">12/12/12 Thursday</span>&nbsp;<span id="time">7:45 pm</span></div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="layout">
				<div class="outer_layer">
					<div class="content">
						<div class="logo">
							<img src="images/doclogo.ico" alt="Logo" height="150px" width="180px">
						</div>
						<div class="information">
							<div id="fileName"><a href="files/OS.docx">OS All Programs</a></div><br>
							<div id="fileDescripion">All the programs required for operating systems are in this document.</div><br>
							<div id="uploaderName">Uploaded By:Sujay Jagtap</div><br>
							<div id="uploadTime"><span id="date">12/12/12 Thursday</span>&nbsp;<span id="time">7:45 pm</span></div>
						</div>
					</div>
				</div>
			</div>

			<div class="layout">
				<div class="outer_layer">
					<div class="content">
						<div class="logo">
							<img src="images/pptlogo.png" alt="Logo" height="150px" width="180px">
						</div>
						<div class="information">
							<div id="fileName"><a href="files/Alzheimer’s and the brain.pptx">Alzheimer’s and the brain</a></div><br>
							<div id="fileDescripion">Alzheimer's is a type of dementia that causes problems with memory, thinking and behavior. ... Alzheimer's is the most common form of dementia, a general term for memory loss and other intellectual abilities serious enough to interfere with daily life.
							</div><br>
							<div id="uploaderName">Uploaded By:Sujay Jagtap</div><br>
							<div id="uploadTime"><span id="date">12/12/12 Thursday</span>&nbsp;<span id="time">7:45 pm</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="layout">
				<div class="outer_layer">
					<div class="content">
						<div class="logo">
							<img src="images/pdflogo.png" alt="Logo" height="150px" width="180px">
						</div>
						<div class="information">
							<div id="fileName"><a href="Hacking Wireless Networks For Dummies.pdf">Hacking Wireless Networks For Dummies</a></div><br>
							<div id="fileDescripion">Become a cyber-hero - know the common wireless weaknesses "Reading a book like this one is a worthy endeavor toward becoming an experienced wireless security professional."</div><br>
							<div id="uploaderName">Uploaded By:Sujay Jagtap</div><br>
							<div id="uploadTime"><span id="date">12/12/12 Thursday</span>&nbsp;<span id="time">7:45 pm</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="layout">
				<div class="outer_layer">
					<div class="content">
						<div class="logo">
							<img src="images/pdflogo.png" alt="Logo" height="150px" width="180px">
						</div>
						<div class="information">
							<div id="fileName"><a href="files/Java Programming.pdf">Java Programming</a></div><br>
							<div id="fileDescripion">Learning a complex new language is no easy task especially when it s an object-oriented computer programming language like Java. You might think the problem is your brain. It seems to have a mind of its own, a mind that doesn't always want to take in the dry, technical stuff you're forced to study. The fact is your brain craves novelty. It's constantly searching, scanning, waiting for something unusual to happen. After all, that's the way it was built to help you stay alive. It takes all the routine, ordinary, dull stuff and filters it to the background so it won't interfere with your brain's real work--recording things that matter. How does your brain know what matters? It's like the creators of the Head First approach say, suppose you're out for a hike and a tiger jumps in front of you, what happens in your brain? Neurons fire. Emotions crank up. Chemicals surge. That's how your brain knows.</div><br>
							<div id="uploaderName">Uploaded By:Sujay Jagtap</div><br>
							<div id="uploadTime"><span id="date">12/12/12 Thursday</span>&nbsp;<span id="time">7:45 pm</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="layout">
				<div class="outer_layer">
					<div class="content">
						<div class="logo">
							<img src="images/pdflogo.png" alt="Logo" height="150px" width="180px">
						</div>
						<div class="information">
							<div id="fileName"><a href="files/Python Programming.pdf">Python Programming</a></div><br>
							<div id="fileDescripion">Python is classified as a scripting language. Generally speaking,
							this just means that it’s not compiled to create the machine-readable
							code and that the code is “tied-into” another program as a control
							routine. Compiled languages, such as C++, require the programmer
							to run the source code through a compiler before the software is can be
							used by a computer. Depending on the program’s size, the compilation
							process can take minutes to hours.</div><br>
							<div id="uploaderName">Uploaded By:Sujay Jagtap</div><br>
							<div id="uploadTime"><span id="date">12/12/12 Thursday</span>&nbsp;<span id="time">7:45 pm</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="searchShared">
			<h1>Search for documents</h1>
			<input type="text" id="key" placeholder="Type the document name">
			<div id="searchResult">
				
			</div>
		

		</div>
	</div>
	<div id="new-upload" class="modal">
		<div class="new-upload-content">
		    <div class="new-upload-header">
			      <span class="close">×</span>
			      <h2>You are Sharing a document</h2>
		    </div>
		    <div class="new-upload-body">
		    	<form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data" >
			     	<input type="text" placeholder="Enter the file name" name="file_name"><br>
		    	 	<input type="text" placeholder="Enter the description" name="desc"><br>
			     	<input type="file" name ="upload" placeholder="Upload a file"><br>
			     	<select name="shareWith" id="">
			     		<option value="-1">Share with</option>
			     		<option value="1">Your Class</option>
			     		<option value="2">All people</option>
			     		<option value="3">Private</option>
			     	</select><br>
			     	<input type="submit" value="Upload">
			     </form>

			</div>
		    <div class="new-upload-footer">
		      <h3>powered by Vessel</h3>
		    </div>
		</div>
	</div>
	<div id="new-download" class="modal">
		<div class="new-download-content">
		    <div class="new-download-header">
			      <span class="closed">×</span>
			      <h2>You are downloading a document</h2>
		    </div>
		    <div class="new-download-body">
		    	<form id="downloadForm" action="download.php" method="post" enctype="multipart/form-data" >
			     	<input type="text" placeholder="Enter the file name" name="file_name"><br>
			     	<br>
			     	<input type="submit" value="Download">
			     </form>
			</div>
		    <div class="new-download-footer">
		      <h3>powered by Vessel</h3>
		    </div>
		</div>
	</div>
	<script>
		var modal = document.getElementById('new-upload');
		var btn = document.getElementById("uploadbtn");
		var span = document.getElementsByClassName("close")[0];
		btn.onclick = function() {
		    modal.style.display = "block";
		}
		span.onclick = function() {
		    modal.style.display = "none";
		}
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		     if (event.target == modald) {
		        modald.style.display = "none";
		    }
		}

		var modald = document.getElementById('new-download');
		var btnd = document.getElementById("downloadbtn");
		var spand = document.getElementsByClassName("closed")[0];
		btnd.onclick = function() {
		    modald.style.display = "block";
		}
		spand.onclick = function() {
		    modald.style.display = "none";
		}
	
		
		var files = ["The Hacker's Manual (2015).pdf", "Hacking Wireless Networks For Dummies.pdf", "Java Programming.pdf","Python Programming.pdf","Alzheimer’s and the brain.pptx","OS.docx","WordPress The Missing Manual, 2nd Edition - Matthew MacD.pdf","Web Programming.pdf"];
	function searchFile(){
		var key=document.getElementById('key').value;
		var patt=new RegExp(key,"i");
		var res;
		for (var i = 0; i < files.length; i++) {
			res=patt.test(files[i])
			if(res==true){
				var elemDiv = document.createElement('h3');
				var textnode = document.createTextNode(files[i]);
				elemDiv.appendChild(textnode);
				var anchor=document.createElement('a');
				anchor.href="files/"+files[i];
				anchor.appendChild(elemDiv);
				document.getElementById('searchResult').appendChild(anchor);
			}
		}

	}

	var event = document.getElementById("key");
	event.addEventListener("keydown", function (e) {
   		if (e.keyCode === 13) {
        	searchFile();
   		}
	});
	
	</script>
</body>
</html>
