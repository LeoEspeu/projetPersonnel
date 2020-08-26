function genererDataTable(){
    $('#table-course').DataTable({
        paging: false,
        "scrollX": true,
        "scrollY": "700px",
        "scrollCollapse": true,
        dom: 'Bfrtip',
        buttons: [
            { extend: 'copy', text: 'Copier' },
            { extend: 'csv', text: 'Export csv' },
            { extend: 'excel', text: 'Export excel' },
            { extend: 'pdf', text: 'Export pdf' },
            { extend: 'print', text: 'Imprimer' }
        ],
        language: {
            processing:     "Traitement en cours...",
            search: "Rechercher :",
            lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
            info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
            infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
            infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
            infoPostFix:    "",
            loadingRecords: "Chargement en cours...",
            zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
            emptyTable:     "Aucune donnée disponible dans le tableau",
            paginate: {
                first:      "Premier",
                previous:   "Pr&eacute;c&eacute;dent",
                next:       "Suivant",
                last:       "Dernier"
            },
            aria: {
                sortAscending:  ": activer pour trier la colonne par ordre croissant",
                sortDescending: ": activer pour trier la colonne par ordre décroissant"
            }
        }
    });
}