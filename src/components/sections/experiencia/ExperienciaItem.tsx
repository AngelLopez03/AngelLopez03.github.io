interface ExperienciaItemProps {
  empresa?: string; // Opcional, solo para el nivel superior
  periodo: string;
  cargo: string;
  descripcion: string;
  esAscenso?: boolean; // Para aplicar estilos de "profundidad"
  children?: React.ReactNode; // Para anidar ascensos
}

const ExperienciaItem: React.FC<ExperienciaItemProps> = ({
  empresa,
  periodo,
  cargo,
  descripcion,
  esAscenso = false,
  children,
}) => {
  return (
    <div className={`experience-item glass ${esAscenso ? 'experience-item--child' : ''}`}>
      {empresa && <h3 className="experience-item__company">{empresa}</h3>}
      <h4 className="experience-item__position">{cargo}</h4>
      <p className="experience-item__period">{periodo}</p>
      <p className="experience-item__description">{descripcion}</p>
      {children && (
        <div className="experience-item__children">
          {children}
        </div>
      )}
    </div>
  );
};

export default ExperienciaItem;