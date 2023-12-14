    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <h1>Company Name Dashboard</h1>
        </div>
      </div>

      <div class="row justify-content-start">
        <div class="col-2">
          <p>Kamis, 12 Januari 2024</p>
        </div>
        <div class="col-2">
          <p>19.00 WIB</p>
        </div>
      </div>

      <!-- Stats -->
      <div class="row">
        <div class="col-md-8">
          <div class="card w-auto p-12">
            <div class="card-body">
              <h5 class="card-title">Stats</h5>

              <!-- Kartu Inside -->
              <div class="row">
                <div class="card col-md mx-2" style="background-color: #4F378B; width: 18rem; color: #E6E0E9">
                  <div class="card-body">
                    <h6 class="card-title">Participants / This month</h6>
                    <!-- Info kartu -->
                    <div class="row my-1">
                        <h5 class="card-text col-md d-flex align-items-center">43</h5>
                        <div class="col-md">
                          <p class="card-text">+32%</p>
                          <p class="card-text">New participants</p>
                        </div>
                    </div>
                    <div class="row my-1">
                        <h6 class="card-text col-md d-flex align-items-center">336</h6>
                        <div class="col-md">
                          <p class="card-text">+14%</p>
                          <p class="card-text">Total participants</p>
                        </div>
                    </div>
                  </div>
                </div>

                <div class="card col-md mx-2" style="background-color: #FEF7FF; width: 18rem;">
                  <div class="card-body">
                    <h6 class="card-title">Ratings / This month</h6>
                    <!-- Info kartu -->
                    <div class="row my-1">
                        <p class="card-text col-md d-flex align-items-end justify-content-end fs-5">4.5</p>
                        <p class="card-text col-md d-flex align-items-end justify-content-start">/5</p>
                        <div class="col-md">
                          <p class="card-text">+ (0.1)</p>
                          <p class="card-text">Overall rating</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center" style="width: auto">
                      <div class="card my-1" style="background-color: #4F378B; color: #E6E0E9">
                        <div class="card-body">
                          <h6 class="card-title">Course A</h6>
                          <p class="card-text">4.9 / 5 (99 ratings)</p>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="card col-md mx-2" style="background-color: #FEF7FF; width: 18rem;">
                  <div class="card-body">
                    <h6 class="card-title">Revenue / Last 5 months</h6>
                    <img class="my-4" src="/assets/Grafik.png" alt="Grafik Revenue 5 Bulan" width="170"/>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- Upcoming Activities -->
        <div class="col-md-4">
          <div class="card w-auto">
            <div class="card-body">
              <h5 class="card-title">Upcoming Activities</h5>
              <!-- Kartu Inside -->
              <div class="d-flex justify-content-center mx-2 flex-column">
                <div class="card my-1" style="background-color: #FEF7FF; width: auto;">
                  <div class="card-body">
                    <h6 class="card-title">Course A Pertemuan 1</h6>
                    <p class="card-text">12.00 at Jl.Asap Kebakaran No. 7</p>
                  </div>
                </div>
                <div class="card my-1" style="background-color: #FEF7FF; width: auto;">
                  <div class="card-body">
                    <h6 class="card-title">Course A Pertemuan 2</h6>
                    <p class="card-text">12.00 at Jl.Asap Kebakaran No. 7</p>
                  </div>
                </div>
                <div class="card my-1" style="background-color: #FEF7FF; width: auto;">
                  <div class="card-body">
                    <h6 class="card-title">Course A Pertemuan 3</h6>
                    <p class="card-text">12.00 at Jl.Asap Kebakaran No. 7</p>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="card w-auto my-4">
            <div class="card-body">
              <h5 class="card-title">Course Overview</h5>

              <!-- <style>
                .custom-header {
                  background-color: #FEF7FF;
                }
              </style> -->

              <table class="table table-hover table-bordered border-dark table-responsive">
                <thead style="background-color: #FEF7FF;">
                  <tr>
                    <th scope="col">Course Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Participants</th>
                    <th scope="col">Margin</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Reviews</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td scope="row">Course Name</td>
                    <td>Rp100.000</td>
                    <td>109</td>
                    <td>Rp10.900.000</td>
                    <td>4.8</td>
                    <td>129</td>
                  </tr>
                  <tr>
                    <td scope="row">Course Name</td>
                    <td>Rp100.000</td>
                    <td>109</td>
                    <td>Rp10.900.000</td>
                    <td>4.8</td>
                    <td>129</td>
                  </tr>
                  <tr>
                    <td scope="row">Course Name</td>
                    <td>Rp100.000</td>
                    <td>109</td>
                    <td>Rp10.900.000</td>
                    <td>4.8</td>
                    <td>129</td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>