<!DOCTYPE html>
<html>
<head>
</head>
<title>Attendance</title>
<link rel="stylesheet" href="/css/details.css">
<link rel="stylesheet" href="/css/navibar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<link rel="sty lesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<body>
  <div class="col-md-12">
    <div class="row">
      <ul id="navbar">
          <li><a href="{{'dashboard'}}">Dashboard</a></li>
        <div class="logout">
          <li><a href="{{'login'}}">Logout</a></li>
        </div>
      </ul>
    </div>
  </div>
  <br>
  <div class="row">
<div class="col-2">
    <div class="vertical-menu">
      <a href="{{'dashboard'}}"><i class="fa-solid fa-address-card"></i><b>Employee Details</b></a>
      <a href="{{'attendance'}}"><i class="fa-solid fa-circle-check"></i><b>Employee Attendance</b></a>
      <a href="{{'request'}}"class="active"><i class="fa-sharp fa-solid fa-list-check"></i><b>Leave Request</b></a>
    </div>
  </div>
  <br>
  <div class="col-10">
    <h1>Employee Leave Request</h1>
      <table id="table" class="center" style="width: 100%">
        <thead>
          <th>Employee Name</i></th>
          <th>From Date</i></th>
          <th>To Date</i></th>
          <th>No of Days</i></th>
          <th>Reason </th>
          <th>Status</i></th>
          <th>Action</th>
        </thead>
        <tr>
          <td>John Smith</td>
          <td>5 June 2022</td>
          <td>7 June 2022</td>
          <td>2 Days</td>
          <td>Going to Hospital</td>
          <td><span class="sts">• Pending</span></td>
          <td>
            <button type="button1" class="btn btn-success">Approved</button>
            <button type="button2" class="btn btn-danger">Declined</button>
          </td>
        </tr>
        <tr>
          <td>Will Smith</td>
          <td>8 July 2022</td>
          <td>10 July 2022</td>
          <td>2 Days</td>
          <td>Fever</td>
          <td><span class="sts">• Pending</span></td>
          <td>
            <button type="button1" class="btn btn-success">Approved</button>
            <button type="button2" class="btn btn-danger">Declined</button>
          </td>
        </tr>
        <tr>
          <td>Sarah Connor</td>
          <td>12 October 2022</td>
          <td>15 October 2022</td>
          <td>3 Days</td>
          <td>Going to Hospital</td>
          <td><span class="sts">• Pending</span></td>
          <td>
            <button type="button1" class="btn btn-success">Approved</button>
            <button type="button2" class="btn btn-danger">Declined</button>
          </td>
        </tr>
        <td>Ben Johnson</td>
        <td>22 October 2022</td>
        <td>22 October 2022</td>
        <td>1 Day</td>
        <td>Going to Hospital</td>
        <td><span class="sts">• Pending</span></td>
        <td>
          <button type="button1" class="btn btn-success">Approved</button>
          <button type="button2" class="btn btn-danger">Declined</button>
        </td>
          </tr>
          <tr>
          <td>Hannah</td>
          <td>13 October 2022</td>
          <td>15 October 2022</td>
          <td>2 Days</td>
          <td>Going to Hospital</td>
          <td><span class="sts">• Pending</span></td>
          <td>
            <button type="button1" class="btn btn-success">Approved</button>
            <button type="button2" class="btn btn-danger">Declined</button>
          </td>
        </tr>
        <tr>
          <td>John Smith</td>
          <td>5 June 2022</td>
          <td>7 June 2022</td>
          <td>2 Days</td>
          <td>Going to Hospital</td>
          <td><span class="sts">• Pending</span></td>
          <td>
            <button type="button1" class="btn btn-success">Approved</button>
            <button type="button2" class="btn btn-danger">Declined</button>
          </td>
          <tr>
            <td>John Smith</td>
            <td>5 June 2022</td>
            <td>7 June 2022</td>
            <td>2 Days</td>
            <td>Going to Hospital</td>
            <td><span class="sts">• Pending</span></td>
            <td>
              <button type="button1" class="btn btn-success">Approved</button>
              <button type="button2" class="btn btn-danger">Declined</button>
            </td>
          </tr>
          <tr>
            <td>Will Smith</td>
            <td>8 July 2022</td>
            <td>10 July 2022</td>
            <td>2 Days</td>
            <td>Fever</td>
            <td><span class="sts">• Pending</span></td>
            <td>
              <button type="button1" class="btn btn-success">Approved</button>
              <button type="button2" class="btn btn-danger">Declined</button>
            </td>
          </tr>
          <tr>
            <td>Sarah Connor</td>
            <td>12 October 2022</td>
            <td>15 October 2022</td>
            <td>3 Days</td>
            <td>Going to Hospital</td>
            <td><span class="sts">• Pending</span></td>
            <td>
              <button type="button1" class="btn btn-success">Approved</button>
              <button type="button2" class="btn btn-danger">Declined</button>
            </td>
          </tr>
          <td>Ben Johnson</td>
          <td>22 October 2022</td>
          <td>22 October 2022</td>
          <td>1 Day</td>
          <td>Going to Hospital</td>
          <td><span class="sts">• Pending</span></td>
          <td>
            <button type="button1" class="btn btn-success">Approved</button>
            <button type="button2" class="btn btn-danger">Declined</button>
          </td>
            </tr>
            <tr>
            <td>Hannah</td>
            <td>13 October 2022</td>
            <td>15 October 2022</td>
            <td>2 Days</td>
            <td>Going to Hospital</td>
            <td><span class="sts">• Pending</span></td>
            <td>
              <button type="button1" class="btn btn-success">Approved</button>
              <button type="button2" class="btn btn-danger">Declined</button>
            </td>
          </tr>
          <tr>
            <td>John Smith</td>
            <td>5 June 2022</td>
            <td>7 June 2022</td>
            <td>2 Days</td>
            <td>Going to Hospital</td>
            <td><span class="sts">• Pending</span></td>
            <td>
              <button type="button1" class="btn btn-success">Approved</button>
              <button type="button2" class="btn btn-danger">Declined</button>
            </td>
             <tr>
          <td>John Smith</td>
          <td>5 June 2022</td>
          <td>7 June 2022</td>
          <td>2 Days</td>
          <td>Going to Hospital</td>
          <td><span class="sts">• Pending</span></td>
          <td>
            <button type="button1" class="btn btn-success">Approved</button>
            <button type="button2" class="btn btn-danger">Declined</button>
          </td>
        </tr>
        <tr>
          <td>Will Smith</td>
          <td>8 July 2022</td>
          <td>10 July 2022</td>
          <td>2 Days</td>
          <td>Fever</td>
          <td><span class="sts">• Pending</span></td>
          <td>
            <button type="button1" class="btn btn-success">Approved</button>
            <button type="button2" class="btn btn-danger">Declined</button>
          </td>
        </tr>
        <tr>
          <td>Sarah Connor</td>
          <td>12 October 2022</td>
          <td>15 October 2022</td>
          <td>3 Days</td>
          <td>Going to Hospital</td>
          <td><span class="sts">• Pending</span></td>
          <td>
            <button type="button1" class="btn btn-success">Approved</button>
            <button type="button2" class="btn btn-danger">Declined</button>
          </td>
        </tr>
        <td>Ben Johnson</td>
        <td>22 October 2022</td>
        <td>22 October 2022</td>
        <td>1 Day</td>
        <td>Going to Hospital</td>
        <td><span class="sts">• Pending</span></td>
        <td>
          <button type="button1" class="btn btn-success">Approved</button>
          <button type="button2" class="btn btn-danger">Declined</button>
        </td>
          </tr>
          <tr>
          <td>Hannah</td>
          <td>13 October 2022</td>
          <td>15 October 2022</td>
          <td>2 Days</td>
          <td>Going to Hospital</td>
          <td><span class="sts">• Pending</span></td>
          <td>
            <button type="button1" class="btn btn-success">Approved</button>
            <button type="button2" class="btn btn-danger">Declined</button>
          </td>
        </tr>
        <tr>
          <td>John Smith</td>
          <td>5 June 2022</td>
          <td>7 June 2022</td>
          <td>2 Days</td>
          <td>Going to Hospital</td>
          <td><span class="sts">• Pending</span></td>
          <td>
            <button type="button1" class="btn btn-success">Approved</button>
            <button type="button2" class="btn btn-danger">Declined</button>
          </td>
        </tbody>
      </table>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
      <script>
        $(document).ready(function () {
            $('#table').DataTable();
          });
      </script>
  </div>
  </div>

  </body>
</html>
