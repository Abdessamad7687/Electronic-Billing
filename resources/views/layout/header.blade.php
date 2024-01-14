<header class="p-3 text text mb-3">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 gap-5">
                    <li>
                        <a href="{{ url('/') }}" class="nav-link px-2 text-info active">
                            
                            Dashboard</a></li>

                    <li>
                        <a href="{{ route('list') }}" class="nav-link px-2 text-info">
                        Items</a></li>
                    <li><a href="{{ route('table') }}" class="nav-link px-2 text-info">
                    
                    Table-View</a></li>
                </ul>


                <div class="flags">
                    <select class="form-control changeLang">
                        <option value="en">English</option>
                        <option value="fr">French</option>
                    </select>
                </div>
            </div>

        </div>
    </header>
