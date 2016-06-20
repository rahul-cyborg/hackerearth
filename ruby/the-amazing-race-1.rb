test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  input << gets.chomp.strip.to_i
  input << gets.chomp.strip.split(' ').map(&:to_i)
end

out = []



(0...input.length).step(2).each do |i|
  len = input[i]
  arr = input[i + 1]
  j = len - 1
 
  max_index = j + 1

  p = j - 1
  c = 0
  while p != -1
    if arr[c] < arr[j]
      c += 1
    else
      break
    end
    p -= 1
  end

  max_val = max_index * (c + 1)

  

  while j != -1
    count = 0
    k = j - 1
    l = j + 1

    #puts "left"
    while k != -1
      #puts arr[k]
      if arr[k] < arr[j]
        count += 1
      else
        count += 1
        break
      end
      break if count == len - 1
      k -= 1
    end

    #puts 'right'

    while l != len
      #puts arr[l]
      if arr[l] < arr[j]
        count += 1
      else
        count += 1
        break
      end
      break if count == len - 1
      l += 1
    end
    
    
    max = (j + 1) * count

    if max > max_val
      max_index = (j + 1) 
      max_val = max
    end
    j -= 1
  end
  out <<  max_index
end

puts out