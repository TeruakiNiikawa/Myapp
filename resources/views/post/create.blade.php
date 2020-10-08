<!doctype html>
<html lang="ja" >
  <head>
    <title>ダッシュボードテンプレート for Bootstrap · Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <link href="{{ secure_asset('css/match.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/dashbord.css') }}" rel="stylesheet">
  </head>
  <body >
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
  <div class="container">
    <span class="skiplink-text">Skip to main content</span>
  </div>
</a>

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <!-- <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a> -->
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">会社名</a>
  <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
  <input class="form-control form-control-dark w-100" type="text" placeholder="検索" aria-label="検索">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <!-- <a class="nav-link" href="#">Sign out</a> -->
      <a class="nav-link" href="#">サインアウト</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              <!-- Dashboard <span class="sr-only">(current)</span> -->
              ダッシュボード <span class="sr-only">(現在位置)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/match">
              <span data-feather="file"></span>
              <!-- Orders -->
              MATCH
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/post">
              <span data-feather="shopping-cart"></span>
              <!-- Products -->
              POST
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/mypage">
              <span data-feather="users"></span>
              <!-- Customers -->
              MY PAGE
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/message">
              <span data-feather="bar-chart-2"></span>
              <!-- Reports -->
              MESSAGE
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/question">
              <span data-feather="layers"></span>
              <!-- Integrations -->
              お問い合わせ
            </a>
          </li>
        </ul>

        
      </div>
    </nav>

     <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>ニュース新規作成</h2>
              
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    
                   <body translate="no" >
        <div class="center">
        <select name="sources" id="sources" class="custom-select sources" placeholder="Source Type">
            <option value="1">目標１</option>
            <option value="2">目標２</option>
            <option value="3">目標３</option>
            <option value="4">目標4</option>
            <option value="5">目標5</option>
            <option value="6">目標6</option>
            <option value="7">目標7</option>
            <option value="8">目標8</option>
            <option value="9">目標9</option>
            <option value="10">目標10</option>
            <option value="11">目標11</option>
            <option value="12">目標12</option>
            <option value="13">目標13</option>
            <option value="14">目標14</option>
            <option value="15">目標15</option>
            <option value="16">目標16</option>
            <option value="17">目標17</option>
        </select>
        </div>
 


                    <div class="form-group row">
                        <label class="col-md-2">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace()
</script>

<!-- Graphs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
<script>
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      datasets: [{
        data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false,
      }
    }
  });
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery-slim.min.js"><\/script>')
</script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script><script src="/docs/4.5/assets/js/vendor/anchor.min.js"></script>
<script src="/docs/4.5/assets/js/vendor/clipboard.min.js"></script>
<script src="/docs/4.5/assets/js/vendor/bs-custom-file-input.min.js"></script>
<script src="/docs/4.5/assets/js/src/application.js"></script>
<script src="/docs/4.5/assets/js/src/search.js"></script>
<script src="/docs/4.5/assets/js/src/ie-emulation-modes-warning.js"></script>
  </body>
</html>