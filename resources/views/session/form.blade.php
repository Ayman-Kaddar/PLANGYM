<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Plan Gym</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <section class="vh-100" style="background-color: #c0d2e4;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center  h-100">
                <div class="col col-xl-10">
                  <div class="card" style="border-radius: 1rem;">
                    <form method="POST" action="{{route('session.store')}}" id="clientStore">
                        @csrf
                        <div class="col-md-6 col-lg-5 d-flex d-md-block">
                            <div class="card-body text-black">
                                <div class="d-flex align-items-center mb-1">
                                    <span class="h1 fw-bold mb-0">Nueva Sesión</span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="trainer" value="{{$trainer->id}}"/>
                        <input type="hidden" name="client" value="{{$client->id}}"/>
                        <div class="row g-0">
                            
                            <div class="col-lg-12 d-flex d-md-block">
                                <div class="card-body p-2 p-lg-5 text-black">
                                    <div class="form-outline mb-4">
                                        <input type="date" id="day" name="day" class="form-control form-control-lg" placeholder="yyyy-mm-dd" value=""
                                        min="2022-06-10" max="2030-12-31" required/>
                                        <label class="form-label" for="form2Example17">Dia</label>
                                    </div>
                                    <div>
                                        <p class="text-gray-800 font-bold text-xl">Ejercicios <a href="#" class="bgtransp"><i id="addExercice" class='far fa-plus-square'></i></a></p>
                                    </div>
                                    <div class="form-outline mb-4" id="exercices">
                                    </div>
                                    <div class="pt-1 mb-4">
                                        <button type="submit" class="btn btn-dark btn-lg btn-block" type="button">Crea Sesión</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </body>
    <script>
        var container = document.getElementById("exercices");
        var addExercice = document.getElementById("addExercice");
        var totalExercices = 0;
        // var exercices = "<?php echo $exercices; ?>";
        var exercices = @json($exercices);

        document.addEventListener('DOMContentLoaded', function(event) {
            addExercice.addEventListener("click", addEx);
        });

        function addEx() {
            totalExercices++;
            var options = "";
            for (var i = 0; i < exercices.length; i++) {
                options += '<option value="' + exercices[i]["id"] + '">' + exercices[i]["name"] + '</option>';
            }

            container.innerHTML += 
                '<div class="col-lg-12 mx-auto lg:mx-1 m-1 hover:underline font-bold rounded-lg lg:mt-0 py-4 px-8 shadow bg-gray-50 text-gray-800 mb-4" style="background-color: #d6c0e4;">' + 
                '<div class="form-outline m-1 mb-4">' +
                '<select name="exercice" class="form-control form-control-lg" onchange="changeVal(this)">' +
                options +
                '</select></div>' + 
                '<input type="hidden" name="theExercice[]" value="1"/>' + 
                '<div class="form-outline m-1 mb-4">'+
                '<input type="number" name="weight[]" class="form-control form-control-lg" value="" min="1" max="100" required/>' +
                '<label class="form-label" for="form2Example17">Peso</label>' +
                '</div>' + 
                '<div class="form-outline m-1 mb-4">'+
                '<input type="number" name="repetition[]" class="form-control form-control-lg" value="" required/>' +
                '<label class="form-label" for="form2Example17">Repeticiones</label>' +
                '</div>' + 
                '<div class="form-outline m-1 mb-4">'+
                '<input type="number" name="time[]" class="form-control form-control-lg" value="" required/>' +
                '<label class="form-label" for="form2Example17">Tiempo</label>' +
                '</div>' + 
                '<div class="form-outline m-1 mb-4">'+
                '<textarea  type="text" name="remark[]" class="form-control form-control-lg" value="" required></textarea>' +
                '<label class="form-label" for="form2Example17">Anotación Obligatoria</label>' +
                '</div>' + 
                '</div>';
        }

        function changeVal(element) {
            element.parentElement.parentElement.children[1].value = element.value;
            console.log(element.parentElement.parentElement.children[1]);

        }
    </script>
</html>
