@extends('layouts.app')

@section('content')

<!-- Modal -->
<div class="modal fade" id="VoegArtiestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Voeg Artiest toe</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form id="VoegArtiestFORM" action="POST" enctype="multipart/form-data">


        
        <div class="modal-body">
          <ul class="alert alert-warning d-none" id="save_errorList"></ul>

          <div class="form-group mb-3">
            <label for="Naam">Naam</label>
            <input type="text" name="naam" class="form-control">
          </div>

          <div class="form-group mb-3">
            <label for="Label">Label</label>
            <input type="text" name="Label" class="form-control">
          </div>

          <div class="form-group mb-3">
            <label for="Muziekvideo">Muziekvideo</label>
            <input type="text" name="Muziekvideo" class="form-control">
          </div>

          <div class="form-group mb-3">
            <label for="Afbeelding">Afbeelding</label>
            <input type="file" name="afbeelding" class="form-control">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
          <button type="submit" class="btn btn-primary">Opslaan</button>
        </div>

    </form>

      </div>
    </div>
  </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="car">
                <div class="car-header">
                    <h4>Upload je afbeelding
                        <a href="#" data-toggle="modal" data-target="#VoegArtiestModal" class="btn btn-primary btn-sm float-end">Voeg een Artiest toe</a>
                    </h4>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
//Voegt de data toe in de database
    $(document).ready(function () {

          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('submit', '#VoegArtiestFORM' function (e) {
            e.preventDefault();

            let formData = new FormData($('#VoegArtiestFORM')[0]);

            $.ajax({
                type: "POST",
                url: "/artiesten",
                data: formData,
                contentType: false,
                processData: false,
                succes: function (response) {
                  if(response.status == 400)
                  {
                    $('#save_errorList').html("");
                    $('#save_errorList').removeClass("d-none");
                    $.each(response.errors, function(key, err_value) {
                      $('#save_errorList').append('<li>'+err_value+'</li>');
                    })
                  }

                }
            });
            
        });

    });

</script>

@endsection