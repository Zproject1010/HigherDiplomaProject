
                <div id="cart">
                <h2 class="h2-bar">Your Cart</h2>
                <table id="cart" class="table table-hover table-condensed">
                    <thead>
                        <tr>
                            <th style="width:40%">Products</th>
                            <th style="width:10%">Price</th>
                            <th style="width:10%">Quantity</th>
                            <th style="width:30%" class="text-center">Total</th>
                            <th style="width:10%"></th>
                        </tr>
                    </thead>
                    <!-- Product Item -->
                    <tbody>
                        <tr>
                            <td data-th="Product">
                                <div class="row">
                                    <div class="col-sm-2 hidden-xs"><img src="images/1.png" alt="..." class="img-responsive"/></div>
                                    <div class="col-sm-10">
                                        <h5>iPhone 6 16GB Quốc tế mầu đen xám(Space Gray)</h5>
                                    </div>
                                </div>
                            </td>
                            <td data-th="Price">10000000</td>
                            <td data-th="Quantity">
                                <input type="number" min="1" class="form-control text-center" value="1">
                            </td>
                            <td data-th="Subtotal" class="text-center"><span>10000000</span></td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm">Delete</button>                              
                            </td>
                        </tr>
                    </tbody>
                    <!-- End Product Item -->
                    <tfoot>
                        <tr class="visible-xs">
                            <td class="text-center"><strong>Total <span>10000000</span></strong></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="btn btn-warning">Continue Buying</a>
                                <a href="#" class="btn btn-info">Update</a>  
                            </td>
                            <td colspan="2" class="hidden-xs"></td>
                            <td class="hidden-xs text-center"><strong>Total: <span>10000000</span></strong></td>
                            <td><a href="#" class="btn btn-success btn-block">Pay</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>