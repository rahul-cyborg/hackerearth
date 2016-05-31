test_cases = gets.chomp.strip.to_i
out = []
test_cases.times do 
  flag = 'No'
  arr = gets.chomp.strip.split(' ').map(&:to_i)
  n = arr[0]
  length = arr[1]
  temp_array = []
  n.times do
    temp_array << gets.chomp.strip.split(' ').map(&:to_i)
  end
  sorted = temp_array.sort
  data_hash = {}
  sorted.each do |val|
    diff = val[1] - val[0]
    if diff == length
      flag ='Yes'
      break
    end
    data_hash[val[1]] = diff + data_hash[val[0]] if !data_hash[val[0]].nil?
    data_hash[val[1]] = diff  if data_hash[val[0]].nil?
    if data_hash[val[1]] == length
      flag ='Yes'
      break
    end
  end
  out << flag
end

puts out
