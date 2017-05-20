var maderoApp = angular
        .module('maderoApp', ['ngTouch', 'ngMap']);

maderoApp.controller('mainController', function ($rootScope, $scope, $http, NgMap) {
    $scope.textoServicio = "";

    var vm = this;
    vm.positions = [];
    NgMap.getMap().then(function (map) {

        params = {
            'type': 'mapa',
            'filter': ''
        };
        $http.post('server/action.php', params).then(function (res) {
            $rootScope.loading = false;
            $scope.publicidades = [];
            if (res.data !== null && res.data.status === 'OK') {
                var punto = {};
                angular.forEach(res.data.records, function (value, key) {
                    punto = {};
                    if (value.en_uso === "1") {
                        punto.icon = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
                    } else {
                        punto.icon = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';
                    }
                    punto.id = value.id;
                    punto.tipo = value.tipo;
                    punto.lat = value.latitud;
                    punto.lng = value.longitud;
                    $scope.publicidades.push(punto);
                });
                vm.positions = $scope.publicidades;
            } else {
                $scope.publicidades = [];
                //showMessage("No se encontraron resultados");
                //$scope.markers.coordenadas = $scope.publicidades;
            }
        }).catch(function (e) {
            //showMessage("Error al obtener las propiedades. El servidor respondió: " + e.statusText);
            $rootScope.loading = false;
        });


    });

    $scope.mostrarTexto = function (valor) {
        switch (valor) {
            case 'auspicio':
                $scope.textoServicio = 'Noticias – Boletines Informativos – Programas Franjeados – Señales Horarias o de la Temperatura';
                break;
            case 'microespacio':
                $scope.textoServicio = 'Deportivo – Actualidad';
                break;
            case 'especial':
                $scope.textoServicio = 'Creación de Programas – Enlaces en Directo – Interacción con Clientes';
                break;
        }
    };

    $scope.abrirModal = function (tipo) {
        switch (tipo) {
            case 'VIDEOS':
                $scope.tituloModal = "Videos";
                $scope.contenidoModal = "Grabamos y editamos Spot publicitarios, videos corporativos, institucionales, de capacitación e inducción.";
                break;
            case 'REGISTRO':
                $scope.tituloModal = "Registro";
                $scope.contenidoModal = "De Eventos de empresas y Registro de Obras Civiles";
                break;
            case 'FOTOGRAFIA':
                $scope.tituloModal = "Fotografía";
                $scope.contenidoModal = "Acudimos con nuestros fotógrafos cuando los necesites";
                break;
            case 'CAMPANA':
                $scope.tituloModal = "Campañas publicitarias";
                $scope.contenidoModal = "Marketing 360°. Creamos e implementamos tu campaña publicitaria completa, digital y medios convencionales";
                break;
            case 'CATALOGOS':
                $scope.tituloModal = "Catálogos audiovisuales";
                $scope.contenidoModal = "Déjanos la idea y lo desarrollamos cuando necesites resolver los detalles de tu proyecto. ";
                break;
            case 'PANTALLA':
                $scope.tituloModal = "Pantallas rental";
                $scope.contenidoModal = "Para tus eventos empresariales y privados como fiestas o celebraciones";
                break;
        }
        $("#small-modal").modal("show");
    };

    $scope.filtrarMapa = function (tipo) {
        vm.positions = [];
        if (tipo !== 'TODO') {
            angular.forEach($scope.publicidades, function (value, key) {
                if (value.tipo === tipo) {
                    vm.positions.push(value);
                }
            });
        } else {
            vm.positions = $scope.publicidades;
        }
    };



});



