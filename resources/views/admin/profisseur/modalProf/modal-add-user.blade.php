<!-- Modal add user-->
<div class="modal fade" id="addnew" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content rounded-0" style="background-color:rgba(40, 57, 101, 0.774);">
        <div class="modal-header w-100 border-0" >
          <h5 style="color:#fd5234;" class="modal-title w-100 text-center" id="muModalLabel">AJOUTER_PROUFISSEUR</h5>

        </div>
        <div class="modal-body ">

            <form action="{{route('admin.users.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label style="color:#fd5234;" for="nom">NOM :</label>
                  <input type="text" 
                         style="border:solid 0.3px #fd5234; background:rgba(223, 223, 223, 0.705); min-height:45px;"
                         class="form-control rounded-0 " 
                         id="nom" 
                         name="nom" 
                         placeholder="donner le nom ...">
                </div>
                <div class="mb-3">
                  <label for="prenom" style="color:#fd5234;">PRENOM :</label>
                  <input type="text" 
                         style="border:solid 0.3px #fd5234; background:rgba(247, 247, 247, 0.61); min-height:45px;"
                         class="form-control rounded-0" 
                         id="prenom" 
                         name="prenom" 
                         placeholder="donner le prenom ...">
                </div>
                <div class="mb-3">
                  <label for="email" style="color:#fd5234;">E-MAIL :</label>
                  <input type="email" 
                         style="border:solid 0.3px #fd5234; background:rgba(223, 223, 223, 0.705); min-height:45px;"
                         class="form-control rounded-0" 
                         id="email" 
                         name="email" 
                         placeholder="donner l'email ...">
                </div>
                <div class="mb-3" >
                  <label for="telephone" style="color:#fd5234;">TELEPHONE:</label>
                  <input type="text" 
                         style="border:solid 0.3px #fd5234; background:rgba(223, 223, 223, 0.705); min-height:45px;"
                         class="form-control rounded-0" 
                         id="telephone" 
                         name="telephone" 
                         placeholder="donner le telephone ...">
                </div>
                <div class="mb-3">
                  <label for="poste" style="color:#fd5234;">POSTE :</label>
                  <input type="text" 
                         style="border:solid 0.3px #fd5234; background:rgba(223, 223, 223, 0.705); min-height:45px;"
                         class="form-control rounded-0" 
                         id="poste" 
                         name="poste" 
                         placeholder="donner le poste ...">
                </div>

                <div class="modal-footer border-0 w-100 justify-content-around">
                    <button type="button"style='min-width:46%;' class="btn btn-secondary rounded-0" data-bs-dismiss="modal">CLOSE</button>
                    <button type="submit" style="background-color:#fd5234; min-width:46%;"  class="btn text-light rounded-0">SAVE</button> 
                </div>
                
            </form>     
        
            
              
        </div>
   
      </div>
    </div>
  </div>