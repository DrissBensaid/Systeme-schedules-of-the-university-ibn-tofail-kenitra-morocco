<!-- Modal delete user-->
<div class="modal fade" id="deleteUserModal" tabindex="-1"  aria-hidden="true">
    <div class="modal-dialog" >
      <div class="modal-content rounded-0" style="background-color:rgba(40, 57, 101, 0.774);">
        <div class="modal-header border-0">
          <h5 style="color:#fd5234;" class="modal-title w-100 text-center" id="muModalLabel">SUPPRIMER_PROUFISSEUR</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          

            <div style="color:gold">
              <i class="fa-solid fa-triangle-exclamation"></i>
              es-tu sûr tu veux supprimer ce profisseur
            </div>
            <form id="deleteUserForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-footer border-0 w-100 justify-content-around">
                  <button type="button"style='min-width:46%;' class="btn btn-secondary rounded-0" data-bs-dismiss="modal">CLOSE</button>
                  <button type="submit" style="background-color:#fd5234; min-width:46%;"  class="btn text-light rounded-0">SUPPRIMER</button> 
              </div>
                
            </form>     
        
            
              
        </div>
   
      </div>
    </div>
  </div>