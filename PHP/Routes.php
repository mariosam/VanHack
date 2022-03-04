<?php
/**
 * @version PHP
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
namespace PHP;

//echo "The result is "+find_routes( [["MNL", "TAG"], ["CEB", "TAC"], ["TAG", "CEB"], ["TAC", "BOR"]] );

class Routes {

    /**
     * Order list of the places to travel.
     */
    function find_routes(array $routes): string {
        $completeItinerary = [];
    
        $places = $this->organizeRoutes($routes);
        $startingPoint = $this->getStartingPoint($places);
        $completeItinerary = $this->sortRoute($startingPoint, $completeItinerary, $places);
    
        return $this->arrayAsString(', ', $completeItinerary);
    }
    
    function organizeRoutes(array $routes): array {
        $places = [];
      
        foreach ($routes as list($origin, $destiny)) {
            $places[$origin]["to"] = $destiny;
            $places[$destiny]["from"] = $origin;
        }
      
        return $places;
    }
    
    function getStartingPoint(array $places): string {
        $startingPoint = '';
        $countStartingPoint = 0;
      
        foreach ($places as $key => $place) {
            if (!isset($place["from"])) {
                $startingPoint = $key;
                ++$countStartingPoint;
            }
        }
      
        if ($countStartingPoint > 1) {
            throw new InvalidArgumentException('Multiple starting points, check data');
        }
      
        return $startingPoint;
    }
    
    function sortRoute(string $startingPoint, array $completeItinerary, array $places): array {
        $completeItinerary[] = $startingPoint;
      
        if (!isset($places[$startingPoint]["to"])) {
            return $completeItinerary;
        }
      
        $nextStep = $places[$startingPoint]["to"];
        return $this->sortRoute($nextStep, $completeItinerary, $places);
    }
    
    function arrayAsString(string $separator, array $array): string {
        return trim(implode($separator, $array));
    }
}
