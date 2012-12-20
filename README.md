#Prey Standalone Dashboard

* Version: alpha

## Description

Prey dashboard built on FuelPHP for standalone implementations.

##Downloading Prey Standalone Dashboard (and FuelPHP)

Since FuelPHP uses Submodules and since GitHub Downloads don't support submodules, do not download FuelPHP using the Downloads link here. Instead, use the [download links location in the docs](http://docs.fuelphp.com/installation/download.html).

##Cloning Prey Standalone Dashboard

FuelPHP uses submodules for things like the **core** folder.  After you clone the repository you will need to init and update the submodules.

Here is the basic usage:

    git clone --recursive git://github.com/fuel/fuel.git

The above command is the same as running:

    git clone git://github.com/fuel/fuel.git
    cd fuel/
    git submodule init
    git submodule update

You can also shorten the last two commands to one:

    git submodule update --init
