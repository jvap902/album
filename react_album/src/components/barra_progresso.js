import React, {useMemo, useState} from 'react'
import ReactDOM from 'react-dom'

export const BarraProgresso = () => {
  const { ProgressIndicator, Fabric: FabricComponent, initializeIcons } = window.Fabric;

  // Initialize icons in case this example uses them
  initializeIcons();

  const ProgressIndicatorBasicExample = () => {
    
    
    const [qtde, setQtde] = useState(0)
    
    
    const percentComplete = useMemo( () =>  qtde / 25, [qtde])
    
    
    

    return (
      <>
      <button type="button" onClick={() => setQtde(qtde+1)}>Add</button>
      <ProgressIndicator label="Example title" description="Example description" percentComplete={percentComplete} />
  <p>{Math.floor(percentComplete * 100)}%</p>
  </>
    );
  };

  const ProgressIndicatorBasicExampleWrapper = () => <FabricComponent><ProgressIndicatorBasicExample /></FabricComponent>;
  ReactDOM.render(<ProgressIndicatorBasicExampleWrapper />, document.getElementById('content'))
}