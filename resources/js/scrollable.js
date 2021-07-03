"use strict";
var KTDatatablesBasicScrollable = function() {

    var initTable1 = function() {
        var table = $('#kt_datatable1');

        // begin first table
        table.DataTable({
            scrollY: '50vh',
            scrollX: true,
            scrollCollapse: true,
            columnDefs: [
                {
                    targets: 8,
					width: '75px',
                    render: function(data, type, full, meta) {
                        var status = {
                            1: {
                                'title': 'Pending',
                                'class': 'label-light-primary'
                            },
                            2: {
                                'title': 'Delivered',
                                'class': ' label-light-danger'
                            },
                            3: {
                                'title': 'Canceled',
                                'class': ' label-light-primary'
                            },
                            4: {
                                'title': 'Success',
                                'class': ' label-light-success'
                            },
                            5: {
                                'title': 'Info',
                                'class': ' label-light-info'
                            },
                            6: {
                                'title': 'Danger',
                                'class': ' label-light-danger'
                            },
                            7: {
                                'title': 'Warning',
                                'class': ' label-light-warning'
                            },
                        };
                        if (typeof status[data] === 'undefined') {
                            return data;
                        }
                        return '<span class="label label-lg font-weight-bold' + status[data].class + ' label-inline">' + status[data].title + '</span>';
                    },
                },
                {
                    targets: 9,
					width: '75px',
                    render: function(data, type, full, meta) {
                        var status = {
                            1: {
                                'title': 'Online',
                                'state': 'danger'
                            },
                            2: {
                                'title': 'Retail',
                                'state': 'primary'
                            },
                            3: {
                                'title': 'Direct',
                                'state': 'success'
                            },
                        };
                        if (typeof status[data] === 'undefined') {
                            return data;
                        }
                        return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
                            '<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
                    },
                },
            ],
        });
    };

    var initTable2 = function() {
        var table = $('#kt_datatable2');

        // begin second table
        table.DataTable({
            scrollY: '50vh',
            scrollX: true,
            scrollCollapse: true,
            createdRow: function(row, data, index) {
                var status = {
                    1: {
                        'title': 'Pending',
                        'class': 'label-light-primary'
                    },
                    2: {
                        'title': 'Delivered',
                        'class': ' label-light-danger'
                    },
                    3: {
                        'title': 'Canceled',
                        'class': ' label-light-primary'
                    },
                    4: {
                        'title': 'Success',
                        'class': ' label-light-success'
                    },
                    5: {
                        'title': 'Info',
                        'class': ' label-light-info'
                    },
                    6: {
                        'title': 'Danger',
                        'class': ' label-light-danger'
                    },
                    7: {
                        'title': 'Warning',
                        'class': ' label-light-warning'
                    },
                };
                var badge = '<span class="label ' + status[data[18]].class + ' label-inline label-bold">' + status[data[18]].title + '</span>';
                row.getElementsByTagName('td')[18].innerHTML = badge;

                status = {
                    1: {
                        'title': 'Online',
                        'state': 'danger'
                    },
                    2: {
                        'title': 'Retail',
                        'state': 'primary'
                    },
                    3: {
                        'title': 'Direct',
                        'state': 'success'
                    },
                };
                badge = '<span class="label label-' + status[data[19]].state + ' label-dot mr-2"></span>' +
                    '<span class="font-weight-bold text-' + status[data[19]].state + '">' + status[data[19]].title + '</span>';
                row.getElementsByTagName('td')[19].innerHTML = badge;
            },
            columnDefs: [
                {
                    targets: 8,
					width: '75px',
                    render: function(data, type, full, meta) {
                        var status = {
                            1: {
                                'title': 'Pending',
                                'class': 'label-light-primary'
                            },
                            2: {
                                'title': 'Delivered',
                                'class': ' label-light-danger'
                            },
                            3: {
                                'title': 'Canceled',
                                'class': ' label-light-primary'
                            },
                            4: {
                                'title': 'Success',
                                'class': ' label-light-success'
                            },
                            5: {
                                'title': 'Info',
                                'class': ' label-light-info'
                            },
                            6: {
                                'title': 'Danger',
                                'class': ' label-light-danger'
                            },
                            7: {
                                'title': 'Warning',
                                'class': ' label-light-warning'
                            },
                        };
                        if (typeof status[data] === 'undefined') {
                            return data;
                        }
                        return '<span class="label ' + status[data].class + ' label-inline label-bold">' + status[data].title + '</span>';
                    },
                },
                {
                    targets: 9,
					width: '75px',
                    render: function(data, type, full, meta) {
                        var status = {
                            1: {
                                'title': 'Online',
                                'state': 'danger'
                            },
                            2: {
                                'title': 'Retail',
                                'state': 'primary'
                            },
                            3: {
                                'title': 'Direct',
                                'state': 'success'
                            },
                        };
                        if (typeof status[data] === 'undefined') {
                            return data;
                        }
                        return '<span class="label label-' + status[data].state + ' label-dot mr-2"></span>' +
                            '<span class="font-weight-bold text-' + status[data].state + '">' + status[data].title + '</span>';
                    },
                },
            ],
        });
    };

    return {

        //main function to initiate the module
        init: function() {
            initTable1();
            initTable2();
        },

    };

}();

jQuery(document).ready(function() {
    KTDatatablesBasicScrollable.init();
});
