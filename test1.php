<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>练习</title>
    <link href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.css" rel="stylesheet"> 
    <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">KCN</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height:1px;">==$0
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#">Action</a>
                            </li>
                            <li>
                                <a href="#">Another action</a>
                            </li>
                            <li>
                                <a href="#">Something else here</a>
                            </li>
                            <li role="separator" class="divider">
                                
                            </li>
                            <li class="dropdown-header">Nav header
                            </li>
                            <li>
                                <a href="#">Separated link</a>
                            </li>
                            <li>
                                <a href="#">One more separated link</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container theme-showcase" role="main"> ==$0
        <div class="jumbotron" >
            <h2>暑假练习</h2>
            
        </div>
        <p>
            <button type="button" class="btn btn-lg btn-default"> Default</button>
            <button type="button" class="btn btn-lg btn-primary">主要</button>
            <button type="button" class="btn btn-lg btn-success">成功</button>
            <button type="button" class="btn btn-lg btn-info">信息</button>
            <button type="button" class="btn btn-lg btn-warging">警告</button>
            <button type="button" class="btn btn-lg btn-danger">危险</button>
        </p>
        <p>
            <button type="button" class="btn btn-default"> Default</button>
        </p>
        <div class="page-header">
            <h1>Table</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table">
                    <thead>
                       <tr>
                           <th>#</th>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>user Name</th>
                       </tr> 
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First</th>
                            <th>Last Name</th>
                            <th>User Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>KCN</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@KCN</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><button type="button" class="btn btn-danger">危险</button></td>
                            <td><input type="checkbox" >危险</button></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>User Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>KCN</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>