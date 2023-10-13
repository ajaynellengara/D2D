<!-- HEADER -->
<header id="Header">
    <div id="HeaderMain">
        <div class="container">
            <div class="mainFlx">
                <div class="lSide">
                    <a href="manufacturer-index.php" class="logo">
                        <img src="assets/images/logo.svg" class="logo-white" alt="logo" width="220" height="85">
                        <img src="assets/images/logo-dark.svg" class="logo-dark" alt="logo" width="220" height="85">
                    </a>
                </div>
                <div class="RSide">
                    <div class="modal fade" id="HeaderPOP" data-bs-backdrop="static" data-bs-keyboard="false"
                        tabindex="-1" role="dialog" aria-labelledby="HeaderPOPLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <a href="manufacturer-index.php" class="mobLogo" aria-label="Logo">
                                        <img src="assets/images/logo.svg" alt="Main logo" />
                                    </a>
                                    <div class="accordion" id="AccordMenu">
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a href="manufacturer-index.php"
                                                    class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'manufacturer-index' ? 'active' : '' ?>">
                                                    HOME
                                                </a>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a href="manufacturer-about.php"
                                                    class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'manufacturer-about' ? 'active' : '' ?>">
                                                    ABOUT
                                                </a>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a href="manufacturer-infrastructure.php"
                                                    class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'manufacturer-infrastructure' ? 'active' : '' ?>">
                                                    INFRASTRUCTURE
                                                </a>
                                            </div>
                                        </div>
                                        <!-- <div class="accordion-item">
                                            <div class="accordion-header hasAccord">
                                                <button
                                                    class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'product' || basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'product2' ? 'active' : '' ?>"
                                                    type="button" data-bs-toggle="collapse" data-bs-target="#Prodrop"
                                                    aria-expanded="false" aria-controls="collapseOne">
                                                    Products
                                                </button>
                                            </div>
                                            <div id="Prodrop" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#AccordMenu">
                                                <div class="accordion-body">
                                                    <ul>
                                                        <li>
                                                            <a href="product.php">Toner Cartridges</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.php">Ink Cartridges</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.php">Ribbon Cartridges</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.php">Label Cassettes</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.php">Ink Bottle</a>
                                                        </li>
                                                        <li>
                                                            <a href="product.php">Copier Cartridges</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a href="manufacturer-businesses.php"
                                                    class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'manufacturer-businesses' ? 'active' : '' ?>">
                                                    BUSINESSES
                                                </a>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a href="manufacturer-sustainability.php"
                                                    class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'manufacturer-sustainability' ? 'active' : '' ?>">
                                                    SUSTAINABILITY
                                                </a>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-header">
                                                <a href="manufacturer-contact.php"
                                                    class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'manufacturer-contact' ? 'active' : '' ?>">
                                                    CONTACT
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menuIcon">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#HeaderPOP">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="viewport">