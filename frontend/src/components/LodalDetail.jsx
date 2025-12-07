function ModalDetail({ modalRef }) {
  return (
    <div
      className="modal fade"
      ref={modalRef}
      tabIndex="-1"
      aria-labelledby="detailModalLabel"
      aria-hidden="true"
    >
      <div className="modal-dialog modal-dialog-centered">
        <div className="modal-content">

          <div className="modal-header">
            <h5 className="modal-title" id="detailModalLabel">Détails de l’article</h5>
            <button
              type="button"
              className="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div className="modal-body">
            Le développement web consiste à créer des sites et applications web.
            Il utilise des technologies comme HTML, CSS, JavaScript, React, Laravel, etc.
          </div>

          <div className="modal-footer">
            <button className="btn btn-secondary" data-bs-dismiss="modal">
              Fermer
            </button>
          </div>

        </div>
      </div>
    </div>
  );
}

export default ModalDetail;
