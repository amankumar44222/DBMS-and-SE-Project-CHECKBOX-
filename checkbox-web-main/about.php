<html>
  <head>
    <title>About</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
        background-color:white;
      }

      html {
        box-sizing: border-box;
      }

      *,
      *:before,
      *:after {
        box-sizing: inherit;
        box-shadow: aqua;
      }

      .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
      }

      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
        font-style: normal;
      }

      .about-section {
        padding: 50px;
        text-align: center;
        background-color:black;
        color: white;
        font-weight: bold;
      }

      .container {
        padding: 0 16px;
        background-color: rgb(250, 248, 246);
      }

      .container::after,
      .row::after {
        content:"";
        clear: both;
        display: table;
        
      }

      .title {
        color: rgb(148, 39, 39);
        font-weight: bold;
      }

      .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: rgb(0, 0, 0);
        text-align: center;
        cursor: pointer;
        width: 100%;
      }

      .button:hover {
        background-color: #555;
      }

      @media screen and (max-width: 650px) {
        .column {
          width: 100%;
          display: block;
        }
      }
    </style>
    <body>
      <div class="about-section">
        <h1>About Us Page</h1>
        <p>This is the info of our project</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eaque soluta, debitis sequi accusantium ex aliquam, quos, saepe voluptas numquam porro. Laudantium aliquam sapiente, molestiae modi magni pariatur minima voluptates libero voluptatem, tempore aliquid dolorum? Facere, quos vero exercitationem in facilis et placeat fugiat quod fugit voluptatibus rem ea corporis fuga dicta soluta? Quaerat, provident modi. Hic aspernatur fugiat ad reprehenderit sequi ab labore laborum voluptate repellat ullam ipsum, est enim facilis laudantium maxime? Quisquam natus odit ab est distinctio impedit cum maxime, reiciendis inventore, aspernatur molestiae delectus provident voluptatum? Quas eum id, quidem a, totam dolor ex reprehenderit dignissimos dicta culpa vitae. Illum at deserunt fugit nulla? Ex facere aperiam libero inventore! Nam unde modi laboriosam. Ea obcaecati minima dolor, nostrum qui quaerat repellendus quos doloribus voluptates officiis tempore aperiam odit explicabo voluptatibus possimus placeat natus illum sed! Ipsa dignissimos aspernatur perferendis expedita dolores excepturi minima necessitatibus officiis iusto esse quidem libero magnam repellendus, itaque modi. Error aspernatur minima voluptatum, reiciendis sed magnam optio deserunt asperiores consectetur temporibus dolorum cumque assumenda voluptates nemo molestias. Voluptatum molestiae officia error magnam voluptatibus debitis, tempore consectetur nobis laborum non aliquid at dolorem corporis, doloribus reiciendis repellat incidunt, harum repellendus totam. Quod, ab?</p>
      </div>

      <h2 style="text-align: center">Our Team</h2>
      <div class="row">
        <div class="column">
          <div class="card">
            <div class="container">
              <h2>Nishikant Prasad</h2>
              <p class="title">Student of IIIT Dharwad</p>
              <p>DBMS Project</p>
              <p>Nishikantprasad999@gmail.com</p>
              <!-- <p><button class="button">Contact</button></p> -->
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <div class="container">
              <h2>Akshat Mishra</h2>
              <p class="title">Student of IIIT Dharwad</p>
              <p>DBMS Project</p>
              <p>Akshatmishra@gmail.com</p>
              <!-- <p><button class="button">Contact</button></p> -->
            </div>
          </div>
        </div>

        <div class="column">
          <div class="card">
            <div class="container">
              <h2>Priyam Gupta</h2>
              <p class="title">Student of IIIT Dharwad</p>
              <p>DBMS Project</p>
              <p>Priyamgupta@gmail.com</p>
              <!-- <p><button class="button">Contact</button></p> -->
              
            </div>
          </div>
        </div>

        <div class="row">
            <div class="column">
              <div class="card">
                <div class="container">
                  <h2>Sejal Rai</h2>
                  <p class="title">Student of IIIT Dharwad</p>
                  <p>DBMS Project</p>
                  <p>sejalrai@gmail.com</p>
                  <!-- <p><button class="button">Contact</button></p> -->
                </div>
              </div>
            </div>

            <div class="column">
                <div class="card">
                  <div class="container">
                    <h2>Aman Kumar</h2>
                    <p class="title">Student of IIIT Dharwad</p>
                    <p>DBMS Project</p>
                    <p>amankumar@gmail.com</p>
                    <!-- <p><button class="button">Contact</button></p> -->
                  </div>
                </div>
              </div>

              <div class="column">
                <div class="card">
                  <div class="container">
                    <h2>Uttam Jangid</h2>
                    <p class="title">Student of IIIT Dharwad</p>
                    <p>DBMS Project</p>
                    <p>uttamjangid@gmail.com</p>
                    <!-- <p><button class="button">Contact</button></p> -->
                  </div>
                </div>
              </div>

      </div>
    </body>
  </head>
</html>
