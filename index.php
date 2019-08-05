<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home | Handtouch</title>
	<!-- <link rel="icon" type="img/png" href="img/handtouch.png"> -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   	<meta name="viewport" content="width=device-width, initial-scale =1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
   <section id="navbar">
   	 <nav class="navbar navbar-expand">
   	 <div class="container" style="padding-left: 3%; padding-right: 3%;">
      <a class="navbar-brand" href="#"><img src="img/pic.png" alt="handtouch"></a>
   	  <div class="collapse navbar-collapse justify-content-end">
   	   <ul class="navbar-nav">
  	   	 <li class="nav-item"><a class="nav-link" href="#jumbotron">Intro</a></li>
  	   	 <li class="nav-item dropdown">
  	   	  <a class="nav-link dropdown-toggle" href="#">Components</a>
		  <div class="dropdown-menu" id="myDropdown">
  	   	   <a class="dropdown-item" href="#alerts">Alerts</a>
  	   	   <a class="dropdown-item" href="#buttons">Buttons</a>
  	   	   <a class="dropdown-item" href="#forms">Forms</a>
  	   	   <a class="dropdown-item" href="#tables">Tables</a>
  	   	   <a class="dropdown-item" href="#grids">Grids</a>
  	   	  </div>
  	   	 </li>
  	   	 <li class="nav-item"><a class="nav-link" href="Handtouch.zip" download>Download</a></li>
  	   </ul>
   	  </div>
   	  <div class="clearfix"></div>
  	 </div>	
   	 </nav>
   </section>
  
  	<section id="jumbotron">
  	 <div class="container content">
  	   <div class="jumboinner">
  	   	<img src="img/handtouch.png" alt="HandTouch">
	   	<p>
		   Welcome to HandTouch - is a free and open source toolkit for developing. Easy to work with beginners and can access using any platforms. Styles are designed to be a starting point, not a UI framework. <br>
		   <span><a class="btn bt-success " href="Handtouch.zip" download>DOWNLOAD</a></span>
		</p>
		
  	   </div>
  	  <div class="clearfix"></div>
  	 </div>
   </section>

   <section id="alerts">
  	 <div class="container content">
  	   <div class="alertinner">
  	   <h3>Alerts</h3>
	   	<p>
		   Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.
		</p>
	    
		<div class="alertcon">
		 <div class="alrt">
		   <div class="a-success">
			<h3>Success Alert!</h3>
			<p>&nbsp;&nbsp;Success Alert fully function!</p>
			<div class="clearfix"></div>
		  </div>
		  <div class="a-info">
			<h3>Info Alert!</h3>
			<p>&nbsp;&nbsp;Info Alert fully function!</p>
			<div class="clearfix"></div>
		  </div>
		  <div class="a-warning">
			<h3>Warning Alert!</h3>
			<p>&nbsp;&nbsp;Warning Alert fully function!</p>
			<div class="clearfix"></div>
		  </div>
		  <div class="a-danger">
			<h3>Danger Alert!</h3>
			<p>&nbsp;&nbsp;Danger Alert fully function!</p>
			<div class="clearfix"></div>
		  </div>
		 </div>
		 <div>
		  	<div class="code">
			 <code>
			  <------Success Alert------><br>
			  &lt;div class="a-success"&gt;<br>
			  &nbsp;&lt;h3&gt;Success Alert!&lt;/h3&gt;<br>
			  &nbsp;&lt;p&gt;&nbsp;Success Alert fully function!&lt;/p&gt;<br>
			  &lt;/div&gt;<br>
			  <------Info Alert------><br>
			  &lt;div class="a-info"&gt;<br>
			  &nbsp;&lt;h3&gt;Info Alert!&lt;/h3&gt;<br>
			  &nbsp;&lt;p&gt;&nbsp;Info Alert fully function!&lt;/p&gt;<br>
			  &lt;/div&gt;<br>
			  <------Warning Alert------><br>
			  &lt;div class="a-warning"&gt;<br>
			  &nbsp;&lt;h3&gt;Warning Alert!&lt;/h3&gt;<br>
			  &nbsp;&lt;p&gt;&nbsp;Warning Alert fully function!&lt;/p&gt;<br>
			  &lt;/div&gt;<br>
			  <------Danger Alert------><br>
			  &lt;div class="a-danger"&gt;<br>
			  &nbsp;&lt;h3&gt;Danger Alert!&lt;/h3&gt;<br>
			  &nbsp;&lt;p&gt;&nbsp;Danger Alert fully function!&lt;/p&gt;<br>
			  &lt;/div&gt;<br>
			 </code>
			</div>
		 </div>
  	  <div class="clearfix"></div>
  	  </div>

  	 </div>
   </section>

   <section id="buttons">
  	 <div class="container content">
  	  <div class="buttoninner">
  	  	<h3>Buttons</h3>
		<p>
			Buttons are an essential part of every user. Handtouch includes several basic styles for button. We have buttons like Primary, Success, Danger, Warning, and Secondary with or without outlines and also, Block buttons.
		</p>
		 <div class="regular">
		  <button class="btn bt-primary" id="bt1">Primary</button>
		  <button class="btn bt-success" id="bt2">Success</button>
		  <button class="btn bt-danger" id="bt3">Danger</button>
		  <button class="btn bt-warning" id="bt4">Warn</button>
		  <button class="btn bt-secondary" id="bt5">Secondary</button>

			<div class="code">
			 <code id="btn1">
			  &lt;button class="btn bt-primary"&gt;Primary&lt;/button&gt;<br>
			 </code>
			 <code id="btn2">
			  &lt;button class="btn bt-success"&gt;Success&lt;/button&gt;<br>
			 </code>
			 <code id="btn3">
			  &lt;button class="btn bt-danger"&gt;Danger&lt;/button&gt;<br>
			 </code>
			 <code id="btn4">
			  &lt;button class="btn bt-warning"&gt;Warn&lt;/button&gt;<br>
			 </code>
			 <code id="btn5">
			  &lt;button class="btn bt-secondary"&gt;Secondary&lt;/button&gt;<br>
			 </code>
			</div>
		 </div>

		 <div class="outline">
		  <button class="btn bt-line-primary" id="btl1">Primary</button>
		  <button class="btn bt-line-success" id="btl2">Success</button>
		  <button class="btn bt-line-danger" id="btl3">Danger</button>
		  <button class="btn bt-line-warning" id="btl4">Warn</button>
		  <button class="btn bt-line-secondary" id="btl5">Secondary</button>

			<div class="code">
			 <code id="btnl1">
			  &lt;button class="btn bt-line-primary"&gt;Primary&lt;/button&gt;<br>
			 </code>
			 <code id="btnl2">
			  &lt;button class="btn bt-line-success"&gt;Success&lt;/button&gt;<br>
			 </code>
			 <code id="btnl3">
			  &lt;button class="btn bt-line-danger"&gt;Danger&lt;/button&gt;<br>
			 </code>
			 <code id="btnl4">
			  &lt;button class="btn bt-line-warning"&gt;Warn&lt;/button&gt;<br>
			 </code>
			 <code id="btnl5">
			  &lt;button class="btn bt-line-secondary"&gt;Secondary&lt;/button&gt;<br>
			 </code>
			</div>	
		 </div>
  	  <div class="clearfix"></div>
  	  </div>
  	   
  	 </div>
   </section>

   <section id="forms">
   	 <div class="container content">
   	  <div class="forminner">
   	   <h3>Forms</h3>
		<p>
			Forms are a huge pain, but hopefully these styles make it a bit easier. All inputs, select, and buttons are normalized for a common height cross-browser so inputs can be stacked or placed alongside each other.
		</p>
	  	<div class="form" >
	  	 <form class="form-horizontal" action="">
	  	 	<h4>Sign Up</h4>
	  	  <div class="form-group">
	  	  	<input type="text" class="form-control" name="firstname" placeholder="First Name">
	  	  </div>
	  	  <div class="form-group">
	  	  	<input type="text" class="form-control" name="lastname" placeholder="Last Name">
	  	  </div>
	  	  <button class="btn bt-primary" id="btl1">Sign Up</button>	
	  	 </form>
	  	</div>
	  	<div class="code">
		   <code id="btnl1">
		   	 &lt;form class="form-horizontal" action=""&gt;<br>
		  	  &nbsp;&lt;h4>Sign Up&lt;/h4&gt;<br>
		  	  &nbsp;&lt;div class="form-group"&gt;<br>
		  	  &nbsp;&nbsp;&lt;input type="text" class="form-control" name="firstname" placeholder="First Name"&gt;<br>
		  	  &nbsp;&lt;/div&gt;<br>
		  	  &nbsp;&lt;div class="form-group"&gt;<br>
		  	  &nbsp;&nbsp;&lt;input type="text" class="form-control" name="lastname" placeholder="Last Name"&gt;<br>
		  	  &nbsp;&lt;/div&gt;<br>
		  	  &nbsp;&lt;button class="btn bt-line-primary"&gt;Sign Up&lt;/button&gt;<br>	
		  	 &lt;/form&gt;<br>
		   </code>
		 </div>
   	  </div>
   	 </div>
   </section>

   <section id="tables">
   	<div class="container content">
   	 <div class="tabinner">
   	  <h3>Tables</h3>
		<p>
			Tables are a best way to organize a lot of data. Use &lt;tr&gt; for row and &lt;td&gt; for column, when building a table. Here are some examples of tables.
		</p>
	  <div class="tbl1">
	   <div class="table ht-table table-1">
		<table>
		  <thead>
		    <th>Surname</th>
		    <th>Given Name</th>
		    <th>Country</th>
		  </thead>
		  <tr>
		    <td>Belga</td>
		    <td>Maze</td>
		    <td>Belgium</td>
		  </tr>
		  <tr>
		    <td>Potter</td>
		    <td>James</td>
		    <td>Iceland</td>
		  </tr>
		  <tr>
		    <td>Leavey</td>
		    <td>Peter</td>
		    <td>Israel</td>
		  </tr>
		  <tr>
		    <td>Scott</td>
		    <td>John</td>
		    <td>Singapore</td>
		  </tr>
		</table>
	   </div>
	  </div>
	  <div class="tbl2">
	   <div class="table ht-table-bord table-2">
		<table>
		 <tr>
		    <th>Surname</th>
		    <th>Given Name</th>
		    <th>Country</th>
		  </tr>
		  <tr>
		    <td>Belga</td>
		    <td>Maze</td>
		    <td>Belgium</td>
		  </tr>
		  <tr>
		    <td>Potter</td>
		    <td>James</td>
		    <td>Iceland</td>
		  </tr>
		  <tr>
		    <td>Leavey</td>
		    <td>Peter</td>
		    <td>Israel</td>
		  </tr>
		  <tr>
		    <td>Scott</td>
		    <td>John</td>
		    <td>Singapore</td>
		  </tr>
		</table>
	   </div>
	  </div>
	  <div class="code">
		<code id="tbl1">
		 &lt;div class="table ht-table table-1"&gt;<br>
		 &nbsp;&lt;table&gt;<br>
		  &nbsp;&nbsp;&lt;thead&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;th&gt;Surname&lt;/th&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;th&gt;Given Name&lt;/th&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;th&gt;Country&lt;/th&gt;<br>
		  &nbsp;&nbsp;&lt;/thead&gt;<br>
		  &nbsp;&nbsp;&lt;tr&gt;<br>
		   &nbsp;&nbsp;&nbsp;&lt;td&gt;Belga&lt;/td&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;td&gt;Maze&lt;/td&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;td&gt;Belgium&lt;/td&gt;<br>
		  &nbsp;&nbsp;&lt;/tr&gt;<br>
		  &nbsp;&nbsp;&lt;tr&gt;<br>
		   &nbsp;&nbsp;&nbsp;&lt;td&gt;Potter&lt;/td&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;td&gt;James&lt;/td&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;td&gt;Iceland&lt;/td&gt;<br>
		  &nbsp;&nbsp;&lt;/tr&gt;<br>
		  &nbsp;&nbsp;&lt;tr&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;td&gt;Leavey&lt;/td&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;td&gt;Peter&lt;/td&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;td&gt;Israel&lt;/td&gt;<br>
		  &nbsp;&nbsp;&lt;/tr&gt;<br>
		 &nbsp;&lt;/table&gt;<br>
	     &lt;/div&gt;<br>
		</code>
		<code id="tbl2">
		 &lt;div class="table ht-table-bord table-2"&gt;<br>
		 &nbsp;&lt;table&gt;<br>
		  &nbsp;&nbsp;&lt;thead&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;th&gt;Surname&lt;/th&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;th&gt;Given Name&lt;/th&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;th&gt;Country&lt;/th&gt;<br>
		  &nbsp;&nbsp;&lt;/thead&gt;<br>
		  &nbsp;&nbsp;&lt;tr&gt;<br>
		   &nbsp;&nbsp;&nbsp;&lt;td&gt;Belga&lt;/td&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;td&gt;Maze&lt;/td&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;td&gt;Belgium&lt;/td&gt;<br>
		  &nbsp;&nbsp;&lt;/tr&gt;<br>
		  &nbsp;&nbsp;&lt;tr&gt;<br>
		   &nbsp;&nbsp;&nbsp;&lt;td&gt;Potter&lt;/td&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;td&gt;James&lt;/td&gt;<br>
		    &nbsp;&nbsp;&nbsp;&lt;td&gt;Iceland&lt;/td&gt;<br>
		  &nbsp;&nbsp;&lt;/tr&gt;<br>
		 &nbsp;&lt;/table&gt;<br>
	     &lt;/div&gt;<br>
		</code>
	  </div>
   	 </div>
   	</div>
   </section>

   <section id="grids">
  	 <div class="container content">
  	  <div class="gridinner">
  	   <div class="col">
		<h3> Grid System </h3>
		<p>
			The grid is a 12-column with a max width of 900px. The max width can be changed with one line of CSS and all columns will resize accordingly.  The syntax is simple and it makes coding responsive much easier. 
		</p>
		<div class="grid-container">
		 <div class="row">
		 <div class="con-12 clr"> twelve</div>
		 <div class="con-1 clr">one</div> <div class="con-11 clr"> eleven</div>
		 <div class="con-2 clr">two</div> <div class="con-10 clr"> ten</div>
		 <div class="con-3 clr">three</div> <div class="con-9 clr"> nine</div>
		 <div class="con-4 clr">four</div> <div class="con-8 clr"> eight</div>
		 <div class="con-5 clr">five</div> <div class="con-7 clr"> seven</div>
		 <div class="con-6 clr">six</div> <div class="con-6 clr"> six</div>
		 <div class="con-7 clr"> seven</div> <div class="con-5 clr">five</div>
		 <div class="con-8 clr"> eight</div> <div class="con-4 clr">four</div>
		 <div class="con-9 clr"> nine</div> <div class="con-3 clr">three</div>
		 <div class="con-10 clr"> ten</div> <div class="con-2 clr">two</div>
		 <div class="con-11 clr"> eleven</div><div class="con-1 clr"> one</div>
		 <div class="con-12 clr"> twelve</div>
		 </div>
		 
		</div>

		<div class="grid-container">
		 <h4 style="margin: 10px auto 7px;">Example</h4>
		 <div class="row">
		 <div class="con-3 clr"> container 3 [.con-3] </div> 
		 <div class="con-6 clr"> container 6 <br>[.con-6] </div> 
		 <div class="con-3 clr"> container 3 [.con-3] </div>
		 </div>
		 
		</div> 

		<div class="code">
		 <code>
		  &lt;div class="row"&gt; <br>
		  &nbsp;&lt;div class="con-3"&gt; container 3 [.con-3] &lt;/div&gt; <br>
		  &nbsp;&lt;div class="con-6"&gt; container 6 [.con-6] &lt;/div&gt; <br>
		  &nbsp;&lt;div class="con-3"&gt; container 3 [.con-3] &lt;/div&gt; <br>
		  &lt;/div&gt;
		 </code>
		</div>
	   </div>
  	   <div class="clearfix"></div>
  	  </div>
  	   
  	 </div>
   </section>
	
	<section id="footer">
	 <div class="container content">
	  <div class="footinner">
		<div class="contact">
		<div class="social">
		  <a href="#"><img src="img/fb.png" alt="Facebook"></a>
		  <a href="#"><img src="img/gmail.png" alt="GooglePlus"></a>
		</div>
		<p class="foot">Copyright &copy; 2018 Handtouch | Design: <a href="https://www.codeme.com">CodeMe</a></p>
		</div>
	  	
	   <div class="clearfix"></div>
	  </div>
	 </div>
	</section>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/query.js"></script>

</body>
</html>