<?php
ob_start();
session_start();
require_once 'templates/header.php';

if ( isset($_SESSION['user' ])!="" ) {
    require_once 'templates/admin.php';
   }

require_once 'templates/nav.php';  
?>

<div class= "container container-fluid">
<h1>Entrepreneurs statement on school strike for climate (#EntrepreneursForFuture)</h1>

<div>
<p>

#FRIDAYSFORFUTURE – AN URGENT CALL TO ACTION! ENTREPRENEURS WANT TO IMPLEMENT MORE CLIMATE PROTECTION
Young people are going on strike, demonstrating worldwide for ambitious targets to prevent climate change. They have understood that the climate crisis is a genuine crisis that threatens the future of our planet and have responded with a historic mobilization of students around the globe. They have been supported by 23,000 scientists who have signed a statement declaring that current measures to protect our climate, endangered species, our forests, our soil and our seas are nowhere near sufficient. We as entrepreneurs also wish to declare our solidarity with the strikers.

From our everyday business activities we know that:

It is possible to do business and protect the climate at the same time. There are already a wide range of innovative technologies, products, services and business models which do just that. Nevertheless, politicians need to act to create conditions which allow such technologies and business models to compete fairly and to generate change in the economy as a whole.

The countries of the world signed a legally binding agreement in Paris in 2015 to keep global warming well below 2° C. Signatories also promised to make significant efforts to keep warming below 1.5° C.

As entrepreneurs we support the Paris agreement and the following aims:

Effective CO2-pricing mechanism for all sectors with planned price increases. This will encourage investment in low-carbon infrastructure and technologies.
Speed up the energy revolution. We need a faster and legally binding exit from coal. We also need an energy efficiency strategy, with tax breaks for improving the carbon footprint of buildings, an ambitious law to reduce the energy used by buildings, and government to act as a role model with its own building projects. We have the technology to meet the energy demands of Europe and indeed the whole world with 100% renewable energy.
Divestment and elimination of subsidies that damage the climate by 2025. This is what the G7 countries agreed upon. Now we need to do it.
A transport revolution with an emphasis on reducing total kilometres travelled, encouraging public transport and transport-sharing, and environmentally-friendly zero carbon mobility.
An agricultural revolution. Subsidies to farmers and food industry regulations must be structured so that climate targets can be reached. Effective measures are needed to help to expand organic and climate-friendly forms of farming, and healthy environmentally friendly consumption.
Create a circular economy. It is almost always better to use secondary recycled materials rather than primary raw materials, as they can be provided using less energy and usually need less transport. Targets for recycling and reusing resources not only need to be set, but also met.
Creation of a climate-innovation fund for established companies and start-ups which have innovative ideas to combat climate change.
An ambitious climate protection law to decarbonise the economy and meet the 1.5° C target.
We know that climate protection is possible!

As business professionals we experience the power of climate-friendly and profitable innovative business models and new technologies every day. A speedy and comprehensive move to renewable energies, organic farming, a circular economy and new forms of mobility can also guarantee future-proof employment. But new ideas can also fail if rules and regulations are made to protect business models and technologies of the past. In the past 20 years the technological possibilities to combat climate change have expanded rapidly and their costs have sunk massively.

In order to transform the economy as a whole, government must act and set a new regulatory framework.

If we act now, an orderly decarbonisation of our economy will be possible. This is the only way to ensure that our grandchildren inherit both a healthy planet and a healthy economy. We can control climate change and preserve the natural environment on which we depend. This is why young people are striking. We stand with the #FridaysForFuture movement – the young people have our respect and our fullest support.

 

#EntrepreneursForFuture

</p>

</div>
<br><hr>

<?php
require_once 'templates/footer.php';
?>
