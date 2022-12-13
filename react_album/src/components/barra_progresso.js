  import React, {useEffect, useMemo, useState} from 'react'
  import ReactDOM from 'react-dom'
  import {FigAlbum} from "./fig_album"

  const { ProgressIndicator, Fabric: FabricComponent, initializeIcons } = window.Fabric;

  // Initialize icons in case this example uses them
  initializeIcons();

  export const ProgressIndicatorBasicExample = () => {
    
    
    const [qtde, setQtde] = useState(0)
    
    useEffect( () => {
      setQtde(qtde+1)
    }, [FigAlbum])
    
    const percentComplete = useMemo( () =>  qtde / 25, [qtde])

    return (
      <>
      <ProgressIndicator label="Example title" description="Example description" percentComplete={percentComplete} />
  <p>{Math.floor(percentComplete * 100)}%</p>
  </>
    );
  };

  const ProgressIndicatorBasicExampleWrapper = () => <FabricComponent><ProgressIndicatorBasicExample /></FabricComponent>;
  ReactDOM.render(<ProgressIndicatorBasicExampleWrapper />, document.getElementById('content'))