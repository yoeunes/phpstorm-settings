/**
 * @param ${TYPE_HINT} $${PARAM_NAME}
 *
 * @return self
 */
public function set${NAME}(#if (${SCALAR_TYPE_HINT})?${SCALAR_TYPE_HINT} #else#end$${PARAM_NAME} = null)#if(${RETURN_TYPE}): self#else#end
{
    $this->${FIELD_NAME} = $${PARAM_NAME};
    
    return $this;
}
