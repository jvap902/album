import React, { useEffect, useMemo, useState } from 'react'
import ReactDOM from 'react-dom'
import { FigAlbum } from "./fig_album"

const { ProgressIndicator, Fabric: FabricComponent, initializeIcons } = window.Fabric;

// Initialize icons in case this example uses them
initializeIcons();

export const ProgressIndicatorBasicExample = () => {


  const [qtde, setQtde] = useState(0)

  useEffect(() => {
    setQtde(qtde + 1)
  }, [FigAl]) // ver o que colocar no lugar de FigAlbum ou se é isso mesmo

  const percentComplete = useMemo(() => qtde / 25, [qtde])

  if (qtde < 25) {
    return (
      <>
        <ProgressIndicator label="Example title" description="Example description" percentComplete={percentComplete} />
        <p>{Math.floor(percentComplete * 100)}%</p>
      </>
    );
  } else {
    return (
      <>
        <ProgressIndicator label="Example title" description="Example description" percentComplete={percentComplete} />
        <p>{Math.floor(percentComplete * 100)}%</p>
      </>
    )
  }
};

const ProgressIndicatorBasicExampleWrapper = () => <FabricComponent><ProgressIndicatorBasicExample /></FabricComponent>;
ReactDOM.render(<ProgressIndicatorBasicExampleWrapper />, document.getElementById('content'))