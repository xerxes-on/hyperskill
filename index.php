<?php
require_once './general.php';

// Child classes inheriting from Phone
class Apple extends Phone {
    protected $osVersion;
    protected $faceId;
    protected $wirelessCharging;

    public function __construct($name, $price, $screenSize, $cameraMegapixels, $storageCapacity, $osVersion, $faceId, $wirelessCharging) {
        parent::__construct($name, "Apple", $price, $screenSize, $cameraMegapixels, $storageCapacity);
        $this->osVersion = $osVersion;
        $this->faceId = $faceId;
        $this->wirelessCharging = $wirelessCharging;
    }

    public function getOsVersion() {
        return $this->osVersion;
    }

    public function hasFaceId() {
        return $this->faceId;
    }

    public function supportsWirelessCharging() {
        return $this->wirelessCharging;
    }
}

class Nokia extends Phone {
    protected $batteryLife;
    protected $stockAndroid;
    protected $dualSimSupport;

    public function __construct($name, $price, $screenSize, $cameraMegapixels, $storageCapacity, $batteryLife, $stockAndroid, $dualSimSupport) {
        parent::__construct($name, "Nokia", $price, $screenSize, $cameraMegapixels, $storageCapacity);
        $this->batteryLife = $batteryLife;
        $this->stockAndroid = $stockAndroid;
        $this->dualSimSupport = $dualSimSupport;
    }

    public function getBatteryLife() {
        return $this->batteryLife;
    }

    public function hasStockAndroid() {
        return $this->stockAndroid;
    }

    public function supportsDualSim() {
        return $this->dualSimSupport;
    }
}

class Samsung extends Phone {
    protected $sPenSupport;
    protected $fastCharging;
    protected $edgeDisplay;

    public function __construct($name, $price, $screenSize, $cameraMegapixels, $storageCapacity, $sPenSupport, $fastCharging, $edgeDisplay) {
        parent::__construct($name, "Samsung", $price, $screenSize, $cameraMegapixels, $storageCapacity);
        $this->sPenSupport = $sPenSupport;
        $this->fastCharging = $fastCharging;
        $this->edgeDisplay = $edgeDisplay;
    }

    public function hasSPenSupport() {
        return $this->sPenSupport;
    }

    public function supportsFastCharging() {
        return $this->fastCharging;
    }

    public function hasEdgeDisplay() {
        return $this->edgeDisplay;
    }
}

// Child classes inheriting from Television
class Artel extends Television {
    protected $digitalTuner;
    protected $bezelLessDesign;
    protected $usbRecording;

    public function __construct($name, $price, $screenResolution, $smartTv, $refreshRate, $digitalTuner, $bezelLessDesign, $usbRecording) {
        parent::__construct($name, "Artel", $price, $screenResolution, $smartTv, $refreshRate);
        $this->digitalTuner = $digitalTuner;
        $this->bezelLessDesign = $bezelLessDesign;
        $this->usbRecording = $usbRecording;
    }

    public function hasDigitalTuner() {
        return $this->digitalTuner;
    }

    public function hasBezelLessDesign() {
        return $this->bezelLessDesign;
    }

    public function supportsUsbRecording() {
        return $this->usbRecording;
    }
}

class LG extends Television
{
    protected $webOSPlatform;
    protected $magicRemote;
    protected $nanoCellTechnology;

    public function __construct($name, $price, $screenResolution, $smartTv, $refreshRate, $webOSPlatform, $magicRemote, $nanoCellTechnology)
    {
        parent::__construct($name, "LG", $price, $screenResolution, $smartTv, $refreshRate);
        $this->webOSPlatform = $webOSPlatform;
        $this->magicRemote = $magicRemote;
        $this->nanoCellTechnology = $nanoCellTechnology;
    }

    public function hasWebOSPlatform()
    {
        return $this->webOSPlatform;
    }
}
class TCL extends Television {
    protected $quantumDotTechnology;
    protected $voiceControl;
    protected $gameMasterMode;

    public function __construct($name, $price, $screenResolution, $smartTv, $refreshRate, $quantumDotTechnology, $voiceControl, $gameMasterMode) {
        parent::__construct($name, "TCL", $price, $screenResolution, $smartTv, $refreshRate);
        $this->quantumDotTechnology = $quantumDotTechnology;
        $this->voiceControl = $voiceControl;
        $this->gameMasterMode = $gameMasterMode;
    }

    public function hasQuantumDotTechnology() {
        return $this->quantumDotTechnology;
    }

    public function supportsVoiceControl() {
        return $this->voiceControl;
    }

    public function hasGameMasterMode() {
        return $this->gameMasterMode;
    }
}

// Laptop child classes

class HP extends Laptop {
    protected $backlitKeyboard;
    protected $durableConstruction;
    protected $longBatteryLife;

    public function __construct($name, $price, $screenSize, $ram, $storage, $processor, $ramSize, $storageType, $backlitKeyboard, $durableConstruction, $longBatteryLife) {
        parent::__construct($name, "HP", $price, $screenSize, $ram, $storage, $processor, $ramSize, $storageType);
        $this->backlitKeyboard = $backlitKeyboard;
        $this->durableConstruction = $durableConstruction;
        $this->longBatteryLife = $longBatteryLife;
    }

    public function hasBacklitKeyboard() {
        return $this->backlitKeyboard;
    }

    public function isDurable() {
        return $this->durableConstruction;
    }

    public function hasLongBatteryLife() {
        return $this->longBatteryLife;
    }
}

class Acer extends Laptop {
    protected $gamingLaptop;
    protected $thinAndLightDesign;
    protected $affordablePricePoint;

    public function __construct($name, $price, $screenSize, $ram, $storage, $processor, $ramSize, $storageType, $gamingLaptop, $thinAndLightDesign, $affordablePricePoint) {
        parent::__construct($name, "Acer", $price, $screenSize, $ram, $storage, $processor, $ramSize, $storageType);
        $this->gamingLaptop = $gamingLaptop;
        $this->thinAndLightDesign = $thinAndLightDesign;
        $this->affordablePricePoint = $affordablePricePoint;
    }

    public function isGamingLaptop() {
        return $this->gamingLaptop;
    }

    public function isThinAndLight() {
        return $this->thinAndLightDesign;
    }

    public function hasAffordablePricePoint() {
        return $this->affordablePricePoint;
    }
}
class Lenovo extends Laptop {
    protected $thinkPadSeries;
    protected $convertibleDesign;
    protected $longWarranty;

    public function __construct($name, $price, $screenSize, $ram, $storage, $processor, $ramSize, $storageType, $thinkPadSeries, $convertibleDesign, $longWarranty) {
        parent::__construct($name, "Lenovo", $price, $screenSize, $ram, $storage, $processor, $ramSize, $storageType);
        $this->thinkPadSeries = $thinkPadSeries;
        $this->convertibleDesign = $convertibleDesign;
        $this->longWarranty = $longWarranty;
    }

    public function isThinkPadSeries() {
        return $this->thinkPadSeries;
    }

    public function isConvertibleDesign() {
        return $this->convertibleDesign;
    }

    public function hasLongWarranty() {
        return $this->longWarranty;
    }
}






$iphone14Pro = new Apple(
    "iPhone 14 Pro",
    999,
    6.1,
    12,
    256,
    "iOS 16",
    true,
    true
);
$lgC2 = new LG(
    "LG C2 OLED TV",
    1799,
    "4280x2160",
    true,
    120,
    "webOS",
    true,
    true
);
if ($lgC2->hasWebOSPlatform()) {
    echo "This LG TV has webOS platform.\n";
};
$lenovoX1Carbon = new Lenovo(
    "ThinkPad X1 Carbon",
    1899,
    14.0,
    16,
    512,
    "Intel Core i7-1270P",
    16,
    "SSD",
    true,
    true,
    true
);
if ($lenovoX1Carbon->hasLongWarranty()) {
    echo "This Lenovo laptop has a 3-year warranty.\n";
}


