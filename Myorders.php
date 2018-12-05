<?php
require(__DIR__.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."head.inc.php");
?>
            <main class="main-content bgc-grey-100">
                <div id="mainContent">
                    <div class="container-fluid">
                        <h4 class="c-grey-900 mT-10 mB-30">Order Data Table</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                                    <h4 class="c-grey-900 mB-20">All Orders Data</h4>
                                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Writer Name</th>
                                                <th>Order Number</th>
                                                <th>Status</th>
                                                <th>Number Of page</th>
                                                <th>Expire date</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Writer Name</th>
                                                <th>Order Number</th>
                                                <th>Status</th>
                                                <th>Number Of page</th>
                                                <th>Expire date</th>
                                                <th>Price</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Writer</td>
                                                <td>#f534534w</td>
                                                <td>Pending</td>
                                                <td>61</td>
                                                <td>2018/12/25</td>
                                                <td>$320</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Writer</td>
                                                <td>#435343</td>
                                                <td>In Progress</td>
                                                <td>20</td>
                                                <td>2018/12/10</td>
                                                <td>$100</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Writer</td>
                                                <td>#f534534w</td>
                                                <td>In Progress</td>
                                                <td>10</td>
                                                <td>2018/12/05</td>
                                                <td>$50</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Writer</td>
                                                <td>#3434374</td>
                                                <td>Pending</td>
                                                <td>61</td>
                                                <td>2018/12/25</td>
                                                <td>$320</td>
                                            </tr>
                                            <tr>
                                                <td>wierd Writer</td>
                                                <td>#35434</td>
                                                <td>Completed</td>
                                                <td>100</td>
                                                <td>2018/12/25</td>
                                                <td>1,000</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Writer</td>
                                                <td>#7634637547</td>
                                                <td>Pending</td>
                                                <td>61</td>
                                                <td>2018/12/25</td>
                                                <td>$320</td>
                                            </tr>
                                            <tr>
                                                <td>Tiger Writer</td>
                                                <td>#jd3433</td>
                                                <td>Expired</td>
                                                <td>61</td>
                                                <td>2018/12/25</td>
                                                <td>$320</td>
                                            </tr>
                                            <tr>
                                                <td>Wierd Writer</td>
                                                <td>#23652</td>
                                                <td>In progress</td>
                                                <td>20</td>
                                                <td>2018/12/13</td>
                                                <td>$150</td>
                                            </tr>
                                            <tr>
                                                <td>leonne Writer</td>
                                                <td>#273823</td>
                                                <td>Completed</td>
                                                <td>70</td>
                                                <td>2018/12/25</td>
                                                <td>$400</td>
                                            </tr>
                                            <tr>
                                                <td>Leonne Writer</td>
                                                <td>#27323</td>
                                                <td>Pending</td>
                                                <td>61</td>
                                                <td>2018/12/25</td>
                                                <td>$320</td>
                                            </tr>
                                            <tr>
                                                <td>wierd Writer</td>
                                                <td>#98023</td>
                                                <td>Not assigned</td>
                                                <td>30</td>
                                                <td>2018/12/25</td>
                                                <td>$340</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

<?php
	require(__DIR__.DIRECTORY_SEPARATOR."include".DIRECTORY_SEPARATOR."footer.inc.php");
?>
