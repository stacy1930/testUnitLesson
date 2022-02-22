import { useEffect, useState } from "react";

const useMeteo = () => {
  const [meteo, setMeteo] = useState<any>();

  const loadMeteo = () => {
    fetch("https://prevision-meteo.ch/services/json/aix-en-provence")
      .then((res) => res.json())
      .then((res) => {
        setMeteo(res);
      });
  };

  useEffect(() => {
    loadMeteo();
  }, []);

  return { meteo, loadMeteo };
};

export default useMeteo;
